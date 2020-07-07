DROP DATABASE IF EXISTS myGallery;
CREATE DATABASE IF NOT EXISTS myGallery;

USE myGallery;

DROP TABLE IF EXISTS Gallery;
CREATE TABLE IF NOT EXISTS Gallery (
    idGallery int(11) AUTO_INCREMENT PRIMARY KEY,
    titleGallery VARCHAR(128),
    descGallery VARCHAR(128),
    imgFullNameGallery VARCHAR(128),
    orderGallery int(11)
);

INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);
INSERT INTO Gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery)
    VALUES ('titleGallery', 'descGallery', 'hand.jpg', 1);


SELECT * FROM gallery;