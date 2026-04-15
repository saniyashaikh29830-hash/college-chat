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
('library', 'The college has a well-stocked library with books, journals, and study material, situated inside the building on a dedicated floor.'),
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
('clubs', 'Yes, there are cultural committees, NSS, and other student clubs active in the college.');
