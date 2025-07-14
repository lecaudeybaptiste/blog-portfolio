<?php

class Comment extends Model
{
    protected $table = 'comments';

    public function findAllByArticle($articleId)
    {
        $stmt = $this->db->prepare("SELECT c.*, u.pseudo FROM comments c JOIN users u ON c.user_id = u.id WHERE c.article_id = :id ORDER BY c.created_at DESC");
        $stmt->execute(['id' => $articleId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($articleId, $userId, $content)
    {
        $stmt = $this->db->prepare("INSERT INTO comments (article_id, user_id, content, created_at) VALUES (:article_id, :user_id, :content, NOW())");
        return $stmt->execute([
            'article_id' => $articleId,
            'user_id' => $userId,
            'content' => $content,
        ]);
    }
}