--Team Exercise Week 4

CREATE TABLE users
( user_id       INT
, password      VARCHAR(255)  NOT NULL
, created_ts    TIMESTAMP          NOT NULL
, first_name    VARCHAR(80)   NOT NULL
, last_name     VARCHAR(80)   NOT NULL
, email         VARCHAR(80)   NOT NULL
, CONSTRAINT pk_user_1    PRIMARY KEY(user_id)
);


CREATE INDEX email_index ON
users (email);

CREATE SEQUENCE user_id_s1 START WITH 1001;

CREATE TABLE note
( note_id       INT
, user_id 		INT       CONSTRAINT nn_note_1  NOT NULL
, note          TEXT                            NOT NULL
, speaker_id    INT       CONSTRAINT nn_note_2  NOT NULL
, created_ts    DATETIME  CONSTRAINT nn_note_3  NOT NULL
, CONSTRAINT pk_note_1    PRIMARY KEY(note_id)
, CONSTRAINT fk_note_1    FOREIGN KEY(user_id) REFERENCES note(user_id)
, CONSTRAINT fk_note_2    FOREIGN KEY(speaker_id) REFERENCES note(speaker_id)
);

CREATE TABLE conference
( conference_id   INT  
, month     	  INT  NOT NULL
, year			  INT  NOT NULL
, CONSTRAINT pk_conference_1    PRIMARY KEY(conference_id)
);

CREATE TABLE speaker
( speaker_id       INT    
, conference_id    INT      CONSTRAINT nn_speaker_1  NOT NULL
, speaker_info_id  INT      CONSTRAINT nn_speaker_2  NOT NULL
, CONSTRAINT pk_speaker_1    PRIMARY KEY(speaker_id)
, CONSTRAINT fk_speaker_1    FOREIGN KEY(conference_id) REFERENCES speaker(conference_id)
, CONSTRAINT fk_speaker_1    FOREIGN KEY(speaker_info_id) REFERENCES speaker(speaker_info_id)
);

CREATE TABLE sessions
( sessions_id       INT    
, sat_morning       BOOLEAN      CONSTRAINT nn_sessions_1  NOT NULL
, sat_afternoon     BOOLEAN      CONSTRAINT nn_sessions_2  NOT NULL
, priesthood        BOOLEAN      CONSTRAINT nn_sessions_3  NOT NULL
, relief_society    BOOLEAN      CONSTRAINT nn_sessions_4  NOT NULL
, sun_morning       BOOLEAN      CONSTRAINT nn_sessions_5  NOT NULL
, sun_afternoon     BOOLEAN      CONSTRAINT nn_sessions_6  NOT NULL
, CONSTRAINT pk_sessions_1    PRIMARY KEY(sessions_id)
, CONSTRAINT fk_sessions_1    FOREIGN KEY(sat_morning) REFERENCES sessions(sat_morning)
, CONSTRAINT fk_sessions_2    FOREIGN KEY(sat_afternoon) REFERENCES sessions(sat_afternoon)
, CONSTRAINT fk_sessions_3    FOREIGN KEY(priesthood) REFERENCES sessions(priesthood)
, CONSTRAINT fk_sessions_4    FOREIGN KEY(relief_society) REFERENCES sessions(relief_society)
, CONSTRAINT fk_sessions_5    FOREIGN KEY(sun_morning) REFERENCES sessions(sun_morning)
, CONSTRAINT fk_sessions_6    FOREIGN KEY(sun_afternoon) REFERENCES sessions(sun_afternoon)
);



SELECT * FROM name
ORDER BY something_id;


DROP TABLE name;