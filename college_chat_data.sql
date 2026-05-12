-- SQL script to initialize and populate the college_chat database
-- Database: college_chat

CREATE DATABASE IF NOT EXISTS college_chat;
USE college_chat;

-- Table structure for table `info`
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `info`
INSERT INTO `info` (`question`, `answer`) VALUES
('name', 'The name of the college is Bunts Sangha College of Arts, Science and Commerce.'),
('address', 'The college is located at S.G. Barve Marg, Kurla East, Mumbai – 400024, Maharashtra, India.'),
('contact', 'The contact number is +91 22 2528 3061 / +91 22 2528 3062.'),
('website', 'The official website is www.buntscollege.org.'),
('institutions', 'The Bunts Sangha campus includes junior college, degree college, and some professional courses under the same management.'),
('floors', 'The college building has approximately 6 floors including ground floor with classrooms, labs, and offices.'),
('courses', 'The college offers courses like B.Com, BMS, BAF, BBI, BSc IT, BSc CS, BA, and some postgraduate programs like M.Com.'),
('admission', 'Admission is based on merit (12th marks) through the Mumbai University online admission process followed by document verification.'),
('documents', 'Required documents include 10th & 12th marksheets, leaving certificate, Aadhaar card, passport photos, caste certificate (if applicable).'),
('fees', 'Fees vary by course, generally ranging from approx ₹5,000 to ₹25,000 per year for aided/unaided courses.'),
('scholarship', 'Yes, government and minority scholarships are available for eligible students.'),
('departments', 'There are around 5–6 main departments including Commerce, Science, Arts, IT, and Management, offering courses in Commerce, Accountancy, IT/Computer Science, and Management Studies.'),
('labs', 'There are multiple labs including computer labs and science labs for practical learning.'),
('computer lab', 'Computer labs are located on upper floors in the IT/Science section of the building.'),
('library', 'The college has a well-stocked library with books, journals, and study material, The library is located on the 6th floor.'),
('bca duration', 'The duration of the BCA (Bachelor of Computer Applications) course is 3 years.'),
('bca subjects', 'Some common subjects included in the BCA course are: Programming Languages (C, C++, Java, Python), Database Management System (DBMS), Web Development, Computer Networks, Operating Systems, Software Engineering, Data Structures, Mathematics, Cyber Security.'),
('bca fees', 'The average fee for the BCA course is approximately ₹35,000 to ₹40,000 per year.'),
('bca eligibility', 'The eligibility criteria for BCA is that the student must have passed 12th standard from a recognized board with minimum required marks.'),
('bca coding', 'Yes, coding is taught in the BCA course. Students learn different programming languages and software development concepts.'),
('bca languages', 'Some important programming languages for BCA students are: C, C++, Java, Python, JavaScript, SQL.'),
('timing', 'College runs in shifts, typically from 7:00 AM to around 5:00 PM depending on junior and degree sections.'),
('teachers', 'Teachers are highly qualified with postgraduate degrees (NET/SET or PhD) and are generally supportive, experienced, and focused on student development.'),
('staff room', 'The staff room is located inside the main academic building, usually on a faculty-designated floor.'),
('staff', 'Yes, the administrative staff is helpful and assists students with admissions, exams, and documentation.'),
('facilities', 'Facilities include library, computer labs, science labs, canteen, gymkhana, seminar hall, and classrooms.'),
('canteen', 'Yes, a canteen is available on the ground floor providing affordable food for students.'),
('gymkhana', 'Yes, gymkhana facilities are available inside the campus for indoor sports and activities.'),
('playground', 'The college has limited open space but provides sports facilities through gymkhana and nearby grounds.'),
('wifi', 'Wi-Fi is available but may be limited to certain areas like labs or offices.'),
('office', 'The administrative office is near the entrance on the ground floor.'),
('washroom', 'Washrooms are available on every floor of the building.'),
('activities', 'Yes, the college encourages participation in cultural, social, and academic extracurricular activities.'),
('events', 'Annual fests, cultural programs, seminars, and competitions are regularly organized.'),
('sports', 'Yes, indoor sports and some outdoor sports activities are conducted for students.'),
('clubs', 'Yes, there are cultural committees, NSS, and other student clubs active in the college.'),
('first floor', 'Science laboratories, Classrooms, Girls Common Room are available on the first floor.'),
('administrative office', 'The Administrative Office is located on the second floor.'),
('third floor', 'The third floor includes the board room, chairman\'s cabin, guest rooms, computer lab, girls\' locker room with washroom, training restaurant, dining hall, quantity training kitchen, and the bakery & confectionery lab.'),
('rph', 'The RPH can be found on the second and third floor.'),
('fourth floor', 'The fourth floor includes the Administrative Office (ALSJ), reception, store room, Vice-Principal\'s cabin, faculty room, coordinator section, Principal\'s cabin, seminar hall, computer labs, server room, washrooms, medical/rest room, media lab, exam control room, NAAC room, DLLE room, NSS room, and classrooms.'),
('computer labs location', 'Computer Labs I, II, and III are located on the fourth floor.'),
('medical room', 'Yes, there is a medical room/restroom on the fourth floor.'),
('fifth floor', 'The fifth floor includes the Administrative Office (ASJC), reception, coordinator section, store room, faculty room, Vice-Principal\'s cabin, Principal\'s cabin, classroom, exam control room, and boys\' & girls\' washrooms.'),
('administrative office asjc', 'The Administrative Office (ASJC) is located on the fifth floor.'),
('sixth floor', 'The sixth floor includes the Administrative Office (UKS), classrooms, reception, conference room, library, Director\'s cabin, faculty room, counseling room, auditorium, store room, and boys\' & girls\' washrooms.'),
('asjc', 'ASJC stands for Arts, Science and Junior College section, which is part of the Bunts Sangha campus.'),
('uk', 'UK stands for Undergraduate College section, which is part of the Bunts Sangha campus.');
