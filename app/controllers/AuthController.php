<?php

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'pseudo' => $user['pseudo'],
                    'role' => $user['role']
                ];
                header('Location: ' . BASE_URL . '?url=home/index#accueil');
                exit;
            } else {
                $error = "Identifiants incorrects.";
            }
        }

        $this->render('auth/login', ['error' => $error ?? null]);
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL . '?url=home/index#accueil');
        exit;
    }

    public function register() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pseudo = trim($_POST['pseudo']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            // Validation basique
            if (empty($pseudo) || empty($email) || empty($password)) {
                $error = "Tous les champs sont obligatoires.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "Email invalide.";
            } elseif ($password !== $confirmPassword) {
                $error = "Les mots de passe ne correspondent pas.";
            } else {
                $userModel = new User();

                if ($userModel->findByEmail($email)) {
                    $error = "Un compte existe déjà avec cet email.";
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    $userModel->create([
                        'pseudo' => $pseudo,
                        'email' => $email,
                        'password' => $hashedPassword
                    ]);

                    // Auto-login après inscription
                    $user = $userModel->findByEmail($email);
                    $_SESSION['user'] = [
                        'id' => $newUser['id'],
                        'pseudo' => $newUser['pseudo'],
                        'role' => $newUser['role']
                    ];
                    
                    $_SESSION['success'] = 'Inscription réussie ! Bienvenue ' . $newUser['pseudo'] . ' 👋';
                    header('Location: ' . BASE_URL . '?url=home/index#accueil');
                    exit;
                }
            }
        }

        $this->render('auth/register', ['error' => $error ?? null]);
    }
}