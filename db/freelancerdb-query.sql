/* create freelancerDB and its tables with relations and constrains */

create DATABASE freelancerDB;

use freelancerDB;

CREATE TABLE
    users (
        id int PRIMARY KEY AUTO_INCREMENT,
        fullName VARCHAR(255) NOT NULL,
        username VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        birthDate DATE NOT NULL,
        type ENUM('ADMIN', 'OWNER', 'FREELANCER')
    );

/* CREATE TABLE
 freelancers (
 id int PRIMARY KEY AUTO_INCREMENT,
 user_id int UNIQUE NOT NULL REFERENCES users(id)
 );
 CREATE TABLE
 owners (
 id int PRIMARY KEY AUTO_INCREMENT,
 user_id int UNIQUE NOT NULL REFERENCES users(id)
 ); */

CREATE TABLE
    offers (
        id int PRIMARY KEY AUTO_INCREMENT,
        price FLOAT NOT NULL,
        description VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        delivery_date DATETIME NOT NULL,
        project_id int NOT NULL,
        freelancer_id int NOT NULL,
        Foreign Key (freelancer_id) REFERENCES users(id),
        Foreign Key (project_id) REFERENCES projects(id)
    );

CREATE TABLE
    project_types(
        id int PRIMARY KEY AUTO_INCREMENT,
        type VARCHAR(50)
    );

CREATE TABLE
    tags(
        id int PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50)
    );

create table
    projects (
        id int PRIMARY KEY AUTO_INCREMENT,
        title text not null,
        description text not null,
        budget float not null,
        expected_work_time VARCHAR(50),
        status ENUM(
            'SAVED',
            'PUBLISHED',
            'IN_PROGRESS',
            'CANCELED',
            'FINISHED'
        ) DEFAULT 'SAVED',
        created_at timestamp default CURRENT_TIMESTAMP(),
        updated_at timestamp DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
        project_type_id int,
        owner_id int,
        FOREIGN key (owner_id) references users(id),
        FOREIGN key (project_type_id) REFERENCES project_types(id)
    );

CREATE TABLE
    project_tags(
        id int PRIMARY KEY AUTO_INCREMENT,
        project_id int,
        tag_id int,
        Foreign Key (project_id) REFERENCES projects(id),
        Foreign Key (tag_id) REFERENCES tags(id)
    );

CREATE TABLE
    skills(
        id int PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50)
    );

CREATE TABLE
    project_type_skills(
        id INT PRIMARY KEY AUTO_INCREMENT,
        project_type_id int,
        skill_id INT,
        Foreign Key (project_type_id) REFERENCES project_types (id),
        Foreign Key (skill_id) REFERENCES skills(id)
    );

CREATE TABLE
    freelancer_skills(
        id INT PRIMARY KEY AUTO_INCREMENT,
        user_id int,
        skill_id int,
        Foreign Key (user_id) REFERENCES users(id),
        Foreign Key (skill_id) REFERENCES skills (id)
    );