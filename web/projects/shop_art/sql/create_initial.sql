CREATE TABLE user_info
( user_info_id		    INT
, first_name    	    VARCHAR(80)   	CONSTRAINT nn_user_info_01 NOT NULL
, middle_name		    VARCHAR(80)
, last_name     	    VARCHAR(80)   	CONSTRAINT nn_user_info_02 NOT NULL
, email         	    VARCHAR(80)   	CONSTRAINT nn_user_info_03 NOT NULL
, password_hash    	    VARCHAR(1024)  	
, is_artist			    BOOLEAN	   	    CONSTRAINT nn_user_info_05 NOT NULL
, creation_date    	    DATE     	    CONSTRAINT nn_user_info_06 NOT NULL
, created_by		    INT			    CONSTRAINT nn_user_info_07 NOT NULL
, last_updated_by	    INT		  	    CONSTRAINT nn_user_info_08 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_user_info_09 NOT NULL
, CONSTRAINT pk_user_info_1 PRIMARY KEY(user_info_id)
);

CREATE SEQUENCE ui_seq START 1 increment by 1;

CREATE TABLE artist 
( artist_id      	    INT
, user_info_id 		    INT			    CONSTRAINT nn_artist_01 NOT NULL
, pseudonym			    VARCHAR(250)
, about_artist		    TEXT
, picture 				VARCHAR(250)	CONSTRAINT nn_artist_02 NOT NULL
, account_number_hash   VARCHAR(1024)  
, creation_date    	    DATE 	        CONSTRAINT nn_artist_03 NOT NULL
, created_by		    INT			    CONSTRAINT nn_artist_04 NOT NULL
, last_updated_by	    INT			    CONSTRAINT nn_artist_05 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_artist_06 NOT NULL
, CONSTRAINT pk_artist_1  PRIMARY KEY(artist_id)
, CONSTRAINT fk_artist_1  FOREIGN KEY(user_info_id) REFERENCES user_info(user_info_id)
);

CREATE SEQUENCE artist_seq START 1 increment by 1;

CREATE TABLE art_type
( art_type_id 			INT
, name 					VARCHAR(80) 	CONSTRAINT nn_art_type_01 NOT NULL
, description		    TEXT 			CONSTRAINT nn_art_type_02 NOT NULL
, creation_date    	    DATE 	        CONSTRAINT nn_art_type_03 NOT NULL
, created_by		    INT			    CONSTRAINT nn_art_type_04 NOT NULL
, last_updated_by	    INT			    CONSTRAINT nn_art_type_05 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_art_type_06 NOT NULL
, CONSTRAINT pk_art_type  PRIMARY KEY(art_type_id)
);

CREATE SEQUENCE at_seq START 1 increment by 1;

CREATE TABLE art 
( art_id 			    INT
, artist_id			    INT 			CONSTRAINT nn_art_01 NOT NULL
, art_type_id 		    INT 			CONSTRAINT nn_art_02 NOT NULL
, image				    VARCHAR(250)    CONSTRAINT nn_art_03 NOT NULL
, image_title 			VARCHAR(250) 	CONSTRAINT nn_art_04 NOT NULL
, rating			    NUMERIC			
, price				    REAL		    CONSTRAINT nn_art_05 NOT NULL
, discounted_price	    REAL
, creation_date    	    DATE     	    CONSTRAINT nn_art_06 NOT NULL
, created_by		    INT			    CONSTRAINT nn_art_07 NOT NULL
, last_updated_by	    INT			    CONSTRAINT nn_art_08 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_art_09 NOT NULL
, CONSTRAINT pk_art_1  PRIMARY KEY(art_id)
, CONSTRAINT fk_art_1  FOREIGN KEY(artist_id) REFERENCES artist(artist_id)
, CONSTRAINT fk_art_2  FOREIGN KEY(art_type_id) REFERENCES art_type(art_type_id)
);

CREATE SEQUENCE art_seq START 1 increment by 1;

CREATE TABLE art_request
( art_request_id	    INT
, artist_id			    INT 		    CONSTRAINT nn_art_request_01 NOT NULL
, art_type_id 			INT 		    CONSTRAINT nn_art_request_02 NOT NULL
, shopper_id 		    INT			    CONSTRAINT nn_art_request_03 NOT NULL
, creation_date    	    DATE 	        CONSTRAINT nn_art_request_04 NOT NULL
, created_by		    INT			    CONSTRAINT nn_art_request_05 NOT NULL
, last_updated_by	    INT			    CONSTRAINT nn_art_request_06 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_art_request_07 NOT NULL
, CONSTRAINT pk_art_request_1  PRIMARY KEY(art_request_id)
, CONSTRAINT fk_art_request_1  FOREIGN KEY(artist_id)   REFERENCES artist(artist_id)
, CONSTRAINT fk_art_request_2  FOREIGN KEY(art_type_id) REFERENCES art_type(art_type_id)
, CONSTRAINT fk_art_request_3  FOREIGN KEY(shopper_id)  REFERENCES shopper(shopper_id)
);

CREATE SEQUENCE ar_seq START 1 increment by 1;

CREATE TABLE address
( address_id		    INT
, street_address	    VARCHAR(80)	    CONSTRAINT nn_address_01 NOT NULL
, apartment_number	    INT
, city				    VARCHAR(80)	    CONSTRAINT nn_address_02 NOT NULL
, state 			    VARCHAR(20)	    CONSTRAINT nn_address_03 NOT NULL
, postal_code		    INT			    CONSTRAINT nn_address_04 NOT NULL
, user_info_id 		    INT			    CONSTRAINT nn_address_05 NOT NULL
, creation_date    	    DATE  	        CONSTRAINT nn_address_06 NOT NULL
, created_by		    INT			    CONSTRAINT nn_address_07 NOT NULL
, last_updated_by	    INT		  	    CONSTRAINT nn_address_08 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_address_09 NOT NULL
, CONSTRAINT pk_address_1   PRIMARY KEY(address_id)
, CONSTRAINT fk_address_1   FOREIGN KEY(user_info_id) REFERENCES user_info(user_info_id)
);

CREATE SEQUENCE ad_seq START 1 increment by 1;

CREATE TABLE shopper
( shopper_id      		INT
, user_info_id		    INT			    CONSTRAINT nn_shopper_01 NOT NULL
, address_id		    INT			    CONSTRAINT nn_shopper_02 NOT NULL
, card_type_hash	    VARCHAR(1024)   
, card_number_hash	    VARCHAR(1024)   
, card_ccv_hash		    VARCHAR(1024)   
, creation_date    	    DATE     	    CONSTRAINT nn_shopper_06 NOT NULL
, created_by		    INT			    CONSTRAINT nn_shopper_07 NOT NULL
, last_updated_by	    INT		  	    CONSTRAINT nn_shopper_08 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_shopper_09 NOT NULL
, CONSTRAINT pk_shopper_1   PRIMARY KEY(shopper_id)
, CONSTRAINT fk_shopper_1   FOREIGN KEY(user_info_id) REFERENCES user_info(user_info_id)
, CONSTRAINT fk_shopper_2   FOREIGN KEY(address_id) REFERENCES address(address_id)
);

CREATE SEQUENCE s_seq START 1 increment by 1;

CREATE TABLE orders
( orders_id 			INT 
, shopper_id 			INT 			CONSTRAINT nn_orders_01 NOT NULL
, ship_to_address_id 	INT 			CONSTRAINT nn_orders_02 NOT NULL
, total 				REAL 			CONSTRAINT nn_orders_03 NOT NULL
, paid 					BOOLEAN 		CONSTRAINT nn_orders_04 NOT NULL 
, payment_method_type   VARCHAR(80) 	CONSTRAINT nn_orders_05 NOT NULL		
, creation_date    	    DATE     	    CONSTRAINT nn_orders_06 NOT NULL
, created_by		    INT			    CONSTRAINT nn_orders_07 NOT NULL
, last_updated_by	    INT		  	    CONSTRAINT nn_orders_08 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_orders_09 NOT NULL
, CONSTRAINT pk_orders_1  PRIMARY KEY(orders_id)
, CONSTRAINT fk_orders_1  FOREIGN KEY(shopper_id) REFERENCES shopper(shopper_id)
, CONSTRAINT fk_orders_2  FOREIGN KEY(ship_to_address_id) REFERENCES address(address_id)
);

CREATE SEQUENCE o_seq START 1 increment by 1;

CREATE TABLE art_order_lookup 
( art_order_lookup_id   INT
, order_id			    INT			    CONSTRAINT nn_art_order_lookup_01 NOT NULL
, art_id 			    INT			    CONSTRAINT nn_art_order_lookup_02 NOT NULL
, item_quantity		    INT 		    CONSTRAINT nn_art_order_lookup_03 NOT NULL
, creation_date    	    DATE 	        CONSTRAINT nn_art_order_lookup_04 NOT NULL
, created_by		    INT			    CONSTRAINT nn_art_order_lookup_05 NOT NULL
, last_updated_by	    INT			    CONSTRAINT nn_art_order_lookup_06 NOT NULL
, last_update_date	    DATE 		    CONSTRAINT nn_art_order_lookup_07 NOT NULL
, CONSTRAINT pk_art_order_lookup_1  PRIMARY KEY(art_order_lookup_id)
, CONSTRAINT fk_art_order_lookup_1  FOREIGN KEY(order_id) REFERENCES orders(orders_id)
, CONSTRAINT fk_art_order_lookup_2  FOREIGN KEY(art_id)	  REFERENCES art(art_id)
);

CREATE SEQUENCE aol_seq START 1 increment by 1;

/*CREATE TABLE transaction 
( transaction_id			INT
, transaction_date			DATE 			CONSTRAINT nn_transaction_01 NOT NULL
, transaction_type			VARCHAR(30)		CONSTRAINT nn_transaction_02 NOT NULL
, transaction_amount		REAL			CONSTRAINT nn_transaction_03 NOT NULL
, payment_method_type  		VARCHAR(30)		CONSTRAINT nn_transaction_04 NOT NULL
, accounts_payable_number 	VARCHAR(1024)	CONSTRAINT nn_transaction_05 NOT NULL
, cart_id					INT				CONSTRAINT nn_transaction_06 NOT NULL
, creation_ts    			TIMESTAMP     	CONSTRAINT nn_transaction_07 NOT NULL
, created_by				INT				CONSTRAINT nn_transaction_08 NOT NULL
, last_updated_by	    	INT				CONSTRAINT nn_transaction_09 NOT NULL
, last_update_date			DATE 		  	CONSTRAINT nn_transaction_10 NOT NULL
, CONSTRAINT pk_transaction_1	PRIMARY KEY(transaction_id)
, CONSTRAINT fk_transaction_1	FOREIGN KEY() REFERENCES 
, CONSTRAINT fk_transaction_2	FOREIGN KEY() REFERENCES
, CONSTRAINT fk_transaction_3	FOREIGN KEY() REFERENCES  
);*/