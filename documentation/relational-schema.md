bucketlist (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150),
    description TEXT,
    priority INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)