


/*------Assign Team-------------------*/

SELECT a.id, a.user_name, a.mobile, a.designation, b.user_type FROM tbl_users a LEFT JOIN tbl_user_type b ON a.user_type = b.id WHERE a.status = 1
AND NOT EXISTS (SELECT my_team FROM bkf_aggrement_form WHERE booking_id = 4 AND FIND_IN_SET(a.id, my_team))


SELECT a.id, a.user_name, a.mobile, a.designation, b.user_type FROM tbl_users a LEFT JOIN tbl_user_type b ON a.user_type = b.id WHERE a.status = 1
AND  FIND_IN_SET(a.id, (SELECT my_team FROM bkf_aggrement_form WHERE booking_id = 4))

/*-------------Project List------------------------*/

SELECT a.id, a.booking_id, a.create_date AS aggr_date, b.client_name, b.mobile_no, b.email_id, c.work_start_on AS start_date, c.comp_period AS end_date FROM bkf_aggrement_form a 
LEFT JOIN bkf_booking_form b ON a.booking_id = b.id LEFT JOIN bkf_commitment c ON  a.booking_id = c.booking_id
WHERE a.status = 1

/*-----------------Ajax Facility----------------------------------*/

SELECT a.id, a.name FROM bkf_facility_worktag a
WHERE FIND_IN_SET(a.id, (SELECT my_facility FROM bkf_aggrement_form WHERE booking_id = 4))
ORDER BY a.name ASC


SELECT my_facility FROM bkf_aggrement_form WHERE booking_id = 4
 
/**----------Dashboard Api--------------*/

SELECT d.create_date AS aggrement_date, d.site_id, a.id AS booking_id,a.client_name,a.email_id,a.mobile_no,a.permanent_addr, DATE_FORMAT(a.create_date, '%d, %M %Y') AS booking_date, b.final_amt AS project_cost,
DATE_FORMAT(a.aggrement_date, '%d, %M %Y') AS aggrement_date,DATE_FORMAT(c.aggr_period, '%d, %M %Y') AS aggr_period, DATE_FORMAT(c.work_start_on, '%d, %M %Y') AS start_date, c.comp_period AS end_date 
FROM bkf_booking_form a LEFT JOIN bkf_booking_transaction b ON a.id = b.booking_id LEFT JOIN bkf_commitment c ON a.id = c.booking_id
LEFT JOIN bkf_aggrement_form AS d ON a.id = d.booking_id WHERE a.id = 4




