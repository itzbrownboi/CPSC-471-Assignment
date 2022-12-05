
INSERT INTO end_user (user_id, user_name, user_email, user_password )
VALUES ('pratham.pandey1','Pratham Pandey', 'prtham.pandey1@ucalgary.ca', 'WorldCupArgentina');

INSERT INTO end_user(user_id, user_name, user_email, user_password)
VALUES ('linkbob', 'Bob Lincoln', 'boblincoln@hulupedia.com', 'BestPresident');

INSERT INTO end_user (user_id, user_name, user_email, user_password)
VALUES ('jose.menendez', 'Jose Menendez', 'josemenendez@chalupa.com', 'Bestchalupainitaly');


INSERT INTO administrator (administrator_id)
VALUES('pratham.pandey1');

INSERT INTO customer(customer_id, payment_info, card_number, cvv, zip_code)
VALUES ('linkbob', 'credit', '458975612345789654', 456, 'T2N 0R7' );


INSERT INTO customer(customer_id, payment_info, card_number, cvv, zip_code)
VALUES ('jose.menendez', 'credit', '78561234879562348', 956, 'T2N 0R8' );

INSERT INTO airport(airport_code, airport_city, airport_country)
VALUES ('YYC', 'Calgary', 'Canada');

INSERT INTO airport(airport_code, airport_city, airport_country)
VALUES ('YYV', 'Vancouver', 'Canada');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YVR-YYC-STAND', 'ESTIM', 'CNAD', 'YYC');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YYC-YVR-STAND', 'KILO', 'SEPTR', 'YVR');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YVR-YYC-STAND', 'ESTIM', 'CNAD', 'YYC');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YVR-YYZ-STAND', 'ESTIM', 'CNAD', 'YYZ');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YVR-YUL-STAND', 'ESTIM', 'CNAD', 'YUL');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YYT-YVR-STAND', 'ESTIM', 'CNAD', 'YVR');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YUL-YVR-STAND', 'ESTIM', 'CNAD', 'YVR');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YYT-YYC-STAND', 'ESTIM', 'CNAD', 'YYC');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YUL-YYC-STAND', 'ESTIM', 'CNAD', 'YYC');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YYC-YUL-STAND', 'ESTIM', 'CNAD', 'YUL');

INSERT INTO airplane_route (route_name, end_point, start_point, route_airport_code)
VALUES ('YYC-YYZ-STAND', 'ESTIM', 'CNAD', 'YYZ');



INSERT INTO airline (airline_name, airline_country, airline_state_province, airline_city, airline_contact)
VALUES ('Air Canada', 'Canada', 'Ontario', 'Ottawa', '456-465-4568');

INSERT INTO airline (airline_name, airline_country, airline_state_province, airline_city, airline_contact)
VALUES ('Flair Airlines', 'Canada', 'Vancouver', 'British Columbia', '123-543-6542');

INSERT INTO flights (flight_number, seats_left, dept_date_time, arriv_date_time, aircraft_type, arriv_airportcode, dept_airportcode, route_name, airline_name)
VALUES ('AC934', 200, '2023-01-01 6:00:00', '2023-01-01 7:00:00', 'Boeing-737-8', 'YVR', 'YYC', 'YVR-YYC-STAND', 'Air Canada');

INSERT INTO flights (flight_number, seats_left, dept_date_time, arriv_date_time, aircraft_type, arriv_airportcode, dept_airportcode, route_name, airline_name)
VALUES ('AC345', 23, '2023-01-01 8:00:00', '2023-01-01 2:00:00', 'Boeing-737-8', 'YYC', 'YYT', 'YYC-YYT-STAND', 'Air Canada');

INSERT INTO flights (flight_number, seats_left, dept_date_time, arriv_date_time, aircraft_type, arriv_airportcode, dept_airportcode, route_name, airline_name)
VALUES ('AC486', 45, '2023-01-01 9:00:00', '2023-01-01 3:00:00', 'Boeing-737-8', 'YYC', 'YUL', 'YYC-YUL-STAND', 'Air Canada');



INSERT INTO reservation (reservation_number, seat_id, check_in, carry_on, reservation_date, route_name, flight_number)
VALUES ('JODSFMUER', '7C', 0, 1, '2023-01-01', 'YVR-YYC-STAND', 'AC934');





