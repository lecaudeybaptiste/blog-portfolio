<?php

class User extends Model
{
    protected $table = 'users';

    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {

        $stmt = $this->db->prepare("INSERT INTO users (pseudo, email, password) VALUES (:pseudo, :email, :password)");
        return $stmt->execute([
            'pseudo' => $data['pseudo'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }
}