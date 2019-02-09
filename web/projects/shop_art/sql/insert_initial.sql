INSERT INTO user_info 
(user_info_id
, first_name
, last_name
, email
, is_artist
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('ui_seq')
, 'Ethan'
, 'Williams'
, 'ethancwilliams@gmail.com'
, TRUE
, current_date
, 1001
, 1001
, current_date);

INSERT INTO user_info 
(user_info_id
, first_name
, last_name
, email
, is_artist
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('ui_seq')
, 'Sarah'
, 'Tenney'
, 'sarahtenneybear@gmail.com'
, TRUE
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art_type 
( art_type_id
, name
, description
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('at_seq')
, 'Water Color'
, 'Artwork made with a water-soluble binder such as gum arabic, and thinned with water rather than oil, giving a transparent color.'
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art_type 
( art_type_id
, name
, description
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('at_seq')
, 'Photography'
, 'Artwork created by capturing light waves in the form of imagery.'
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art_type 
( art_type_id
, name
, description
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('at_seq')
, 'Drawings'
, 'Artwork created by pencil or pen rather than paint.'
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art_type 
( art_type_id
, name
, description
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('at_seq')
, 'Oil Painting'
, 'Artwork created through the medium of oil-based pigments.'
, current_date
, 1001
, 1001
, current_date);

INSERT INTO address
( address_id
, street_address
, city
, state
, postal_code
, user_info_id
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('at_seq')
, '737 Engleman St.'
, 'Rexburg'
, 'ID'
, '83440'
, (SELECT user_info_id FROM user_info WHERE first_name = 'Ethan' AND last_name = 'Williams')
, current_date
, 1001
, 1001
, current_date);

INSERT INTO artist 
( artist_id
, user_info_id
, about_artist
, picture
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('artist_seq')
, (SELECT user_info_id FROM user_info WHERE first_name = 'Sarah' AND last_name = 'Tenney')
, 'A painter, a photographer, a dreamer, and a life-long artist, Sarah Tenney loves art. Art is powerful! She knows the power art can wield in people''s lives. She loves God and wants to point those who see her work to Him. With the hopes that her artwork will touch the lives and hearts of all her viewers, Sarah is working on her skills so that she can do digital illustration someday. Sarah graduated in 2019 from Brigham Young University-Idaho with a Bachelor''s degree in art education.'
, '..\artwork\sarah.jpg'
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art 
( art_id
, artist_id
, art_type_id
, image
, image_title
, price
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('art_seq')
, (SELECT artist_id FROM artist WHERE picture = '..\artwork\sarah.jpg')
, (SELECT art_type_id FROM art_type WHERE name = 'Oil Painting')
, '../artwork/landscape'
, 'Oil Landscape'
, 25.00
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art 
( art_id
, artist_id
, art_type_id
, image
, image_title
, price
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('art_seq')
, (SELECT artist_id FROM artist WHERE picture = '..\artwork\sarah.jpg')
, (SELECT art_type_id FROM art_type WHERE name = 'Photography')
, '../artwork/Emphasis_on_Red'
, 'Emphasis on Red'
, 20.00
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art 
( art_id
, artist_id
, art_type_id
, image
, image_title
, price
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('art_seq')
, (SELECT artist_id FROM artist WHERE picture = '..\artwork\sarah.jpg')
, (SELECT art_type_id FROM art_type WHERE name = 'Photography')
, '../artwork/In_a_Big_World'
, 'In a Big World'
, 20.00
, current_date
, 1001
, 1001
, current_date);

INSERT INTO art 
( art_id
, artist_id
, art_type_id
, image
, image_title
, price
, creation_date
, created_by
, last_updated_by
, last_update_date) VALUES
( nextval('art_seq')
, (SELECT artist_id FROM artist WHERE picture = '..\artwork\sarah.jpg')
, (SELECT art_type_id FROM art_type WHERE name = 'Photography')
, '../artwork/Simply_beautiful'
, 'Simply Beautiful'
, 20.00
, current_date
, 1001
, 1001
, current_date);