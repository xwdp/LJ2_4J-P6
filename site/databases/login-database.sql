-- Create users table
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,  -- In real app, always store hashed passwords!
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP,
    is_active BOOLEAN DEFAULT true
);

-- Create password_reset_tokens table
CREATE TABLE password_reset_tokens (
    token_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    token VARCHAR(255) NOT NULL,
    expiry_date TIMESTAMP NOT NULL,
    is_used BOOLEAN DEFAULT false,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Create login_attempts table for security
CREATE TABLE login_attempts (
    attempt_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    attempt_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ip_address VARCHAR(45),
    was_successful BOOLEAN,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Insert sample users
-- Note: In a real application, NEVER store plain text passwords!
-- These are just for demonstration purposes
INSERT INTO users (email, password_hash, first_name, last_name) VALUES
('john.doe@example.com', 'hashed_password_123', 'John', 'Doe'),
('jane.smith@example.com', 'hashed_password_456', 'Jane', 'Smith'),
('robert.johnson@example.com', 'hashed_password_789', 'Robert', 'Johnson'),
('sarah.williams@example.com', 'hashed_password_abc', 'Sarah', 'Williams'),
('michael.brown@example.com', 'hashed_password_def', 'Michael', 'Brown'),
('emily.davis@example.com', 'hashed_password_ghi', 'Emily', 'Davis'),
('david.miller@example.com', 'hashed_password_jkl', 'David', 'Miller'),
('lisa.wilson@example.com', 'hashed_password_mno', 'Lisa', 'Wilson'),
('james.taylor@example.com', 'hashed_password_pqr', 'James', 'Taylor'),
('emma.anderson@example.com', 'hashed_password_stu', 'Emma', 'Anderson');

-- Insert some sample password reset tokens
INSERT INTO password_reset_tokens (user_id, token, expiry_date) VALUES
(1, 'reset_token_123', DATE_ADD(NOW(), INTERVAL 1 HOUR)),
(3, 'reset_token_456', DATE_ADD(NOW(), INTERVAL 1 HOUR));

-- Insert some sample login attempts
INSERT INTO login_attempts (user_id, ip_address, was_successful) VALUES
(1, '192.168.1.100', true),
(2, '192.168.1.101', true),
(3, '192.168.1.102', false),
(4, '192.168.1.103', true);

-- Create index for faster email lookups
CREATE INDEX idx_email ON users(email);

-- Create index for tracking login attempts
CREATE INDEX idx_login_attempts ON login_attempts(user_id, attempt_time);
