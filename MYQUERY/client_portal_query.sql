



SELECT a.*,b.stage_name FROM bkf_stage_details a LEFT JOIN bkf_work_stages b ON a.stage_id = b.id`bkf_work_stages``bkf_work_stages``employee_master`


SELECT a.id, a.user_name, a.mobile, a.designation, b.user_type FROM tbl_users a LEFT JOIN tbl_user_type b ON a.user_type = b.id WHERE a.status = 1
AND NOT EXISTS (SELECT my_team FROM bkf_aggrement_form WHERE booking_id = 4 AND FIND_IN_SET(a.id, my_team))


SELECT a.id, a.user_name, a.mobile, a.designation, b.user_type FROM tbl_users a LEFT JOIN tbl_user_type b ON a.user_type = b.id WHERE a.status = 1
AND  FIND_IN_SET(a.id, (SELECT my_team FROM bkf_aggrement_form WHERE booking_id = 4))


SELECT client_name, mobile_no, email_id, aggrement_date  FROM bkf_booking_form WHERE aggrement_status = 1

SELECT a.id, a.booking_id, a.create_date AS aggr_date, b.client_name, b.mobile_no, b.email_id, c.work_start_on AS start_date, c.comp_period AS end_date FROM bkf_aggrement_form a 
LEFT JOIN bkf_booking_form b ON a.booking_id = b.id LEFT JOIN bkf_commitment c ON  a.booking_id = c.booking_id
WHERE a.status = 1


