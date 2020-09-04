# time_inside
Check if the time is between two times with checking the next day

insideTwoTimes("17:00", "18:00", "03:00"); // false
insideTwoTimes("04:00", "18:00", "03:00"); // false
insideTwoTimes("22:00", "18:00", "03:00"); // true
insideTwoTimes("02:00", "18:00", "03:00"); // true
