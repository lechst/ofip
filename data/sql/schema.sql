CREATE TABLE archive (id BIGINT AUTO_INCREMENT, edition VARCHAR(4), link_to TEXT, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE archive_exhibition_audio (id BIGINT AUTO_INCREMENT, archive_id BIGINT, audio_id BIGINT, order_nr BIGINT NOT NULL, content TEXT NOT NULL, INDEX archive_id_idx (archive_id), INDEX audio_id_idx (audio_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE archive_exhibition_image (id BIGINT AUTO_INCREMENT, archive_id BIGINT, image_id BIGINT, order_nr BIGINT NOT NULL, content TEXT NOT NULL, INDEX archive_id_idx (archive_id), INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE archive_exhibition_video (id BIGINT AUTO_INCREMENT, archive_id BIGINT, video_id BIGINT, order_nr BIGINT NOT NULL, content TEXT NOT NULL, INDEX archive_id_idx (archive_id), INDEX video_id_idx (video_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE archive_gallery (id BIGINT AUTO_INCREMENT, archive_id BIGINT, image_id BIGINT, order_nr BIGINT NOT NULL, content TEXT NOT NULL, INDEX archive_id_idx (archive_id), INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE audio (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE cafeteria_program (id BIGINT AUTO_INCREMENT, day DATE NOT NULL, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE calendar (id BIGINT AUTO_INCREMENT, event VARCHAR(120) NOT NULL, day DATE NOT NULL, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE concert_program (id BIGINT AUTO_INCREMENT, day DATE NOT NULL, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE conference_program (id BIGINT AUTO_INCREMENT, day DATE NOT NULL, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE conference_speaker (id BIGINT AUTO_INCREMENT, conference_program_id BIGINT, speaker_image_id BIGINT, content TEXT NOT NULL, order_nr BIGINT NOT NULL, INDEX conference_program_id_idx (conference_program_id), INDEX speaker_image_id_idx (speaker_image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE exhibitions (id BIGINT AUTO_INCREMENT, name VARCHAR(120) NOT NULL, link_to TEXT, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE file (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, filesize BIGINT NOT NULL, filetype VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE homepage_boxes (id BIGINT AUTO_INCREMENT, container_nr BIGINT NOT NULL, menu_category_id BIGINT, is_active TINYINT(1) DEFAULT '0', title TEXT NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX menu_category_id_idx (menu_category_id), INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE layout_image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, order_nr BIGINT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE logotype (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE menu_category (id BIGINT AUTO_INCREMENT, name VARCHAR(120) NOT NULL UNIQUE, order_nr BIGINT UNIQUE, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE picnic_participant (id BIGINT AUTO_INCREMENT, picnic_participant_image_id BIGINT, content TEXT NOT NULL, order_nr BIGINT NOT NULL, INDEX picnic_participant_image_id_idx (picnic_participant_image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE picnic_participant_image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE picnic_plan (id BIGINT AUTO_INCREMENT, name VARCHAR(120) NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE picnic_program (id BIGINT AUTO_INCREMENT, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE registration_form (id BIGINT AUTO_INCREMENT, is_group TINYINT(1) NOT NULL, name VARCHAR(120) NOT NULL, my_email VARCHAR(120) NOT NULL, organization_name VARCHAR(120) NOT NULL, street VARCHAR(120) NOT NULL, postal_code VARCHAR(120) NOT NULL, locality VARCHAR(120) NOT NULL, voivodeship VARCHAR(120) NOT NULL, phone_number VARCHAR(120) NOT NULL, fax VARCHAR(120) NOT NULL, organization_email VARCHAR(120) NOT NULL, internet_page TEXT NOT NULL, nip VARCHAR(120) NOT NULL, agreement1 TINYINT(1) NOT NULL, number_of_participants BIGINT NOT NULL, fee_number BIGINT NOT NULL, fee_total VARCHAR(120) NOT NULL, fac_name VARCHAR(120) NOT NULL, fac_address VARCHAR(120) NOT NULL, fac_nip VARCHAR(120) NOT NULL, accommodation TINYINT(1) NOT NULL, participation_1 TINYINT(1) NOT NULL, participants_1 TINYINT(1) NOT NULL, participation_2 TINYINT(1) NOT NULL, participants_2 TINYINT(1) NOT NULL, participation_3 TINYINT(1) NOT NULL, participants_3 TINYINT(1) NOT NULL, participation_4 TINYINT(1) NOT NULL, participants_4 TINYINT(1) NOT NULL, participation_5 TINYINT(1) NOT NULL, participants_5 TINYINT(1) NOT NULL, participation_6 TINYINT(1) NOT NULL, participants_6 TINYINT(1) NOT NULL, participation_7 TINYINT(1) NOT NULL, participants_7 TINYINT(1) NOT NULL, participation_8 TINYINT(1) NOT NULL, participants_8 TINYINT(1) NOT NULL, participation_9 TINYINT(1) NOT NULL, participants_9 TINYINT(1) NOT NULL, participation_10 TINYINT(1) NOT NULL, participants_10 TINYINT(1) NOT NULL, participation_11 TINYINT(1) NOT NULL, participants_11 TINYINT(1) NOT NULL, participation_12 TINYINT(1) NOT NULL, participants_12 TINYINT(1) NOT NULL, participation_13 TINYINT(1) NOT NULL, participants_13 TINYINT(1) NOT NULL, participation_14 TINYINT(1) NOT NULL, participants_14 TINYINT(1) NOT NULL, participation_15 TINYINT(1) NOT NULL, participants_15 TINYINT(1) NOT NULL, agreement2 TINYINT(1) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE saturdays_breakfast_program (id BIGINT AUTO_INCREMENT, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE saturdays_breakfast_speaker (id BIGINT AUTO_INCREMENT, saturdays_breakfast_program_id BIGINT, saturdays_breakfast_speaker_image_id BIGINT, content TEXT NOT NULL, order_nr BIGINT NOT NULL, INDEX saturdays_breakfast_program_id_idx (saturdays_breakfast_program_id), INDEX saturdays_breakfast_speaker_image_id_idx (saturdays_breakfast_speaker_image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE saturdays_breakfast_speaker_image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE speaker_image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE spectacle_program (id BIGINT AUTO_INCREMENT, day DATE NOT NULL, hour DATE NOT NULL, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, image_id BIGINT, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE static_content_global (id BIGINT AUTO_INCREMENT, name VARCHAR(120) NOT NULL, title TEXT NOT NULL, content TEXT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE static_content_subpage (id BIGINT AUTO_INCREMENT, menu_category_id BIGINT, subpage_id BIGINT, name VARCHAR(120) NOT NULL, title TEXT NOT NULL, content TEXT NOT NULL, INDEX menu_category_id_idx (menu_category_id), INDEX subpage_id_idx (subpage_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE subpage (id BIGINT AUTO_INCREMENT, menu_category_id BIGINT, name VARCHAR(120) UNIQUE, is_menu TINYINT(1) NOT NULL, is_module TINYINT(1) DEFAULT '0', module VARCHAR(120) NOT NULL, INDEX menu_category_id_idx (menu_category_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE user_area_accommodation (id BIGINT AUTO_INCREMENT, place VARCHAR(120) NOT NULL, image_id BIGINT, content TEXT NOT NULL, order_nr BIGINT NOT NULL, INDEX image_id_idx (image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE user_area_place (id BIGINT AUTO_INCREMENT, place VARCHAR(120) NOT NULL, content TEXT NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE user_area_user_image (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE user_area_users (id BIGINT AUTO_INCREMENT, user_area_user_image_id BIGINT, content TEXT NOT NULL, order_nr BIGINT NOT NULL, INDEX user_area_user_image_id_idx (user_area_user_image_id), PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
CREATE TABLE video (id BIGINT AUTO_INCREMENT, filename VARCHAR(120) NOT NULL, PRIMARY KEY(id)) COLLATE utf8_polish_ci ENGINE = INNODB;
ALTER TABLE archive ADD CONSTRAINT archive_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE archive_exhibition_audio ADD CONSTRAINT archive_exhibition_audio_audio_id_audio_id FOREIGN KEY (audio_id) REFERENCES audio(id);
ALTER TABLE archive_exhibition_audio ADD CONSTRAINT archive_exhibition_audio_archive_id_archive_id FOREIGN KEY (archive_id) REFERENCES archive(id);
ALTER TABLE archive_exhibition_image ADD CONSTRAINT archive_exhibition_image_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE archive_exhibition_image ADD CONSTRAINT archive_exhibition_image_archive_id_archive_id FOREIGN KEY (archive_id) REFERENCES archive(id);
ALTER TABLE archive_exhibition_video ADD CONSTRAINT archive_exhibition_video_video_id_video_id FOREIGN KEY (video_id) REFERENCES video(id);
ALTER TABLE archive_exhibition_video ADD CONSTRAINT archive_exhibition_video_archive_id_archive_id FOREIGN KEY (archive_id) REFERENCES archive(id);
ALTER TABLE archive_gallery ADD CONSTRAINT archive_gallery_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE archive_gallery ADD CONSTRAINT archive_gallery_archive_id_archive_id FOREIGN KEY (archive_id) REFERENCES archive(id);
ALTER TABLE cafeteria_program ADD CONSTRAINT cafeteria_program_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE calendar ADD CONSTRAINT calendar_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE concert_program ADD CONSTRAINT concert_program_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE conference_speaker ADD CONSTRAINT conference_speaker_speaker_image_id_speaker_image_id FOREIGN KEY (speaker_image_id) REFERENCES speaker_image(id);
ALTER TABLE conference_speaker ADD CONSTRAINT conference_speaker_conference_program_id_conference_program_id FOREIGN KEY (conference_program_id) REFERENCES conference_program(id);
ALTER TABLE exhibitions ADD CONSTRAINT exhibitions_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE homepage_boxes ADD CONSTRAINT homepage_boxes_menu_category_id_menu_category_id FOREIGN KEY (menu_category_id) REFERENCES menu_category(id);
ALTER TABLE homepage_boxes ADD CONSTRAINT homepage_boxes_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE picnic_participant ADD CONSTRAINT pppi FOREIGN KEY (picnic_participant_image_id) REFERENCES picnic_participant_image(id);
ALTER TABLE picnic_plan ADD CONSTRAINT picnic_plan_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE saturdays_breakfast_speaker ADD CONSTRAINT sssi_1 FOREIGN KEY (saturdays_breakfast_speaker_image_id) REFERENCES saturdays_breakfast_speaker_image(id);
ALTER TABLE saturdays_breakfast_speaker ADD CONSTRAINT sssi FOREIGN KEY (saturdays_breakfast_program_id) REFERENCES saturdays_breakfast_program(id);
ALTER TABLE spectacle_program ADD CONSTRAINT spectacle_program_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE static_content_subpage ADD CONSTRAINT static_content_subpage_subpage_id_subpage_id FOREIGN KEY (subpage_id) REFERENCES subpage(id);
ALTER TABLE static_content_subpage ADD CONSTRAINT static_content_subpage_menu_category_id_menu_category_id FOREIGN KEY (menu_category_id) REFERENCES menu_category(id);
ALTER TABLE subpage ADD CONSTRAINT subpage_menu_category_id_menu_category_id FOREIGN KEY (menu_category_id) REFERENCES menu_category(id);
ALTER TABLE user_area_accommodation ADD CONSTRAINT user_area_accommodation_image_id_image_id FOREIGN KEY (image_id) REFERENCES image(id);
ALTER TABLE user_area_users ADD CONSTRAINT user_area_users_user_area_user_image_id_user_area_user_image_id FOREIGN KEY (user_area_user_image_id) REFERENCES user_area_user_image(id);
