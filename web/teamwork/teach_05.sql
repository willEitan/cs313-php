CREATE TABLE scriptures
( id 		SERIAL
, book 		VARCHAR(30) 	CONSTRAINT nn_scriptures_1 NOT NULL
, chapter 	INT 			CONSTRAINT nn_scriptures_2 NOT NULL
, verse 	INT 			CONSTRAINT nn_scriptures_3 NOT NULL
, content 	TEXT 			CONSTRAINT nn_scriptures_4 NOT NULL
, CONSTRAINT pk_scriptures_1 PRIMARY KEY(id)
);

INSERT INTO scriptures (book, chapter, verse, content) VALUES (
    'John',
    1 ,
    5 ,
    'And the light shineth in darkness; and the darkness comprehended it not.'
    );

INSERT INTO scriptures (book, chapter, verse, content) VALUES (
    'Doctrine and Covenants',
    88,
    49,
    'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless,
          the day shall come when you shall comprehend even God, being quickened in him and by him.'
    );

INSERT INTO scriptures (book, chapter, verse, content)  VALUES (
    'Doctrine and Covenants',
    93,
    28,
    'He that keepeth his commandments receiveth truth and light, until he is glorified in
       truth and knoweth all things.'
    );

INSERT INTO scriptures (book, chapter, verse, content) VALUES (
    'Mosiah',
    16,
    9,
    'He is the light and the life of the world; yea, a light that is endless, that can
        never be darkened; yea, and also a life which is endless, that there can be no more death.'
    );