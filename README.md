## Tạo Wordpress với Docker Compose


#### Clone source from GitHub

    $git clone https://github.com/Ducmy/wp_docker.git
    $git checkout master
    
#### Khởi động docker-compose:

    $docker-compose up -d

#### Tắt docker-compose:

    $docker-compose down

### Sau khi Khởi động

#### URL wordpress:
http://localhost:8000
 

#### URL phpadmin:
http://localhost:8080

#### Database User:
    mysql user: root
    mysql pass: root
    wordpress database: wordpress_db
#### Tạo user wordpress và đăng nhập với user đó:
    ví dụ: user wordpress: mynguyen123
            password wordpress: mynguyen123
#### Lập trình themes wordpress 
    -> ./htdocs/wp-content/themes/<Đặt tên theme>/style.css
# wp_course_tpham
