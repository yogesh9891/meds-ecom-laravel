-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 10:06 AM
-- Server version: 5.7.38
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalmeds_nine11`
--

-- --------------------------------------------------------

--
-- Table structure for table `1-1-meds-names`
--

CREATE TABLE `1-1-meds-names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_1_1_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_2_main_generic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_3_other_names` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_1_4_frontend_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_5_browsing_path_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_6_h1_title_in_blue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_7_name_in_home_diseases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_1_8_drug_info_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_1_9_generic_intro_details` text COLLATE utf8mb4_unicode_ci,
  `c_1_1_10_temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_1_11_di_source_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_1_12_di_source_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `1-1-meds-names`
--

INSERT INTO `1-1-meds-names` (`id`, `c_1_1_1_generic_id_no`, `c_1_1_2_main_generic_name`, `c_1_1_3_other_names`, `c_1_1_4_frontend_url`, `c_1_1_5_browsing_path_name`, `c_1_1_6_h1_title_in_blue`, `c_1_1_7_name_in_home_diseases`, `c_1_1_8_drug_info_title`, `c_1_1_9_generic_intro_details`, `c_1_1_10_temp`, `c_1_1_11_di_source_name`, `c_1_1_12_di_source_url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '108', 'Palbociclib', 'Ibrance,Palbace,Albace', 'buy-palbociclib-ibrance-palbace-online', 'IBRANCE / PALBACE / Palbociclib 75 mg / 100 mg / 125 mg Capsules', 'IBRANCE / PALBACE / Palbociclib 75 mg / 100 mg / 125 mg Capsule', 'Palbociclib / Ibrance / Palbace 75 mg / 100 mg / 125 mg Capsules', 'PALBOCICLIB IBRANCE PALBACE : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Generic PALBOCICLIB / Brand IBRANCE 75mg / 100mg / 125mg Capsule is used to treat breast cancer.&nbsp;</p>\r\n\r\n<p>Palbociclib / Ibrance medication is also found to be effective in treating patients who have certain types of cancer in the breast (estrogen receptor-positive, human epidermal growth factor receptor 2-negative) that have multiplied in other organs of the body along with breast.</p>\r\n\r\n<p>Palbociclib / Ibrance medicine is co-administered with other anticancer therapies of hormones.</p>', NULL, 'U.S. NATIONAL LIBRARY OF MEDICINES', 'https://medlineplus.gov/druginfo/meds/a615013.html', 0, NULL, '2022-04-23 08:59:33', '2022-07-20 01:42:27'),
(2, '109', 'Paliperidone Palmitate', 'Invega', 'buy-paliperidone-palmitate-invega-online', 'INVEGA SUSTENNA / Paliperidone Palmitate 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial', 'INVEGA SUSTENNA / Paliperidone Palmitate 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial', 'Paliperidone Palmitate / Invega Sustenna 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial', 'PALIPERIDONE PALMITATE INVEGA SUSTENNA : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Paliperidone palmitate, sold under the brand name Invega Sustenna among others, is an atypical antipsychotic which is used in the treatment of schizophrenia and schizoaffective disorder. asdfasdfasdfasdf</p>', NULL, 'U.S. NATIONAL LIBRARY OF MEDICINE', 'https://medlineplus.gov/druginfo/meds/a607005.html', 0, NULL, '2022-04-23 09:03:15', '2022-06-15 16:51:51'),
(3, '110', 'Palonosetron', 'Aloxi', 'buy-palonosetron-aloxi-online', 'ALOXI / Palonosetron 0.25 mg / 0.5 mg Injection Vial / Tablet', 'ALOXI / Palonosetron 0.25 mg / 0.5 mg Injection Vial / Tablet', 'Palonosetron / Aloxi 0.25 mg / 0.5 mg Injection Vial / Tablet', 'PALONOSETRON ALOXI : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Palonosetron injection is used to prevent nausea and vomiting that is caused by cancer medicines (chemotherapy). It is also used to prevent nausea and vomiting that may occur after surgery. Palonosetron works by blocking the signals to the brain that cause nausea and vomiting.</p>', NULL, 'U.S. NATIONAL LIBRARY OF MEDICINE', 'https://medlineplus.gov/druginfo/meds/a610002.html', 0, NULL, '2022-04-23 09:06:47', '2022-06-15 16:52:02'),
(4, '111', 'Pamidronate Disodium', 'Aredia', 'buy-pamidronate-disodium-aredia-online', 'AREDIA / Pamidronate Disodium 15 mg / 30 mg / 60 mg / 90 mg Injection Vial', 'AREDIA / Pamidronate Disodium 15 mg / 30 mg / 60 mg / 90 mg Injection Vial', 'Pamidronate Disodium / Aredia 15 mg / 30 mg / 60 mg / 90 mg Injection Vial', 'PAMIDRONATE DISODIUM AREDIA : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Pamidronate disodium, a bisphosphonate, is prescribed for a number of different problems which affect bones. It can be prescribed to ease bone pain or to reduce hypercalcaemia associated with some cancers. It is also prescribed for people with Paget&#39;s disease of bone to prevent bone damage.</p>', NULL, 'U.S. NATIONAL LIBRARY OF MEDICINE', 'https://medlineplus.gov/druginfo/meds/a601163.html', 0, NULL, '2022-04-23 09:13:14', '2022-06-17 06:06:19'),
(5, '112', 'Pancreatin', 'Creon,Zenpep', 'buy-pancreatin-creon-zenpep-online', 'CREON / Pancreatin 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres', 'CREON / Pancreatin 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres', 'Pancreatin / Creon 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres', 'PANCREATIN CREON : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Pancreatin is a combination of digestive enzymes (proteins). These enzymes are normally produced by the pancreas and are important for digesting fats, proteins, and sugars. Pancreatin is used to replace digestive enzymes when the body does not have enough of its own.</p>', NULL, 'NEW ZEALAND MEDICINES AUTHORITY', 'https://www.medsafe.govt.nz/Profs/Datasheet/c/CreonCreonFortecap.pdf', 0, NULL, '2022-04-23 09:16:28', '2022-06-15 16:52:36'),
(6, '113', 'ewrewrwe', 'fgdfgs', 'erwerewr', 'ewrewrwe', 'rwerewr', 'erwrewr', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-30 05:31:09', '2022-05-30 05:31:09'),
(7, '114', 'Panobinostat', 'Farydak,Ixapana', 'buy-panobinostat-farydak-ixapana-online', 'FARYDAK / IXAPANA / Panobinostat 10 mg / 15 mg / 20 mg Capsules', 'FARYDAK / IXAPANA / Panobinostat 10 mg / 15 mg / 20 mg Capsules', 'Panobinostat / Farydak / Ixapana 10 mg / 15 mg / 20 mg Capsules', 'PANOBINOSTAT FARYDAK IXAPANA : Cost/Price, Dosage/Doses, Uses, Side Effects, Warnings etc. information', '<p>Generic PANOBINOSTAT / Brand FARYDAK 10mg / 15mg / 20mg Capsule is recommended for treating cancer and obstructs the stretch of cancer bearing cells in the human body.</p>\r\n\r\n<p>Panobinostat / Farydak medicine is used along with other medicines for treating multiple myeloma.</p>\r\n\r\n<p>When other cancer medications fail to show any positive result then Panobinostat / Farydak medication is prescribed by the doctors.</p>', NULL, 'U.S. NATIONAL LIBRARY OF MEDICINE', 'https://medlineplus.gov/druginfo/meds/a615020.html', 0, NULL, '2022-05-30 05:39:49', '2022-07-21 01:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `1-2-meds-info`
--

CREATE TABLE `1-2-meds-info` (
  `id` int(11) NOT NULL,
  `c_1_2_1_generic_id_no` varchar(21) DEFAULT NULL,
  `c_1_2_2_qs_no` int(13) DEFAULT NULL,
  `c_1_2_3_question` varchar(250) DEFAULT NULL,
  `c_1_2_4_answer` text,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1-2-meds-info`
--

INSERT INTO `1-2-meds-info` (`id`, `c_1_2_1_generic_id_no`, `c_1_2_2_qs_no`, `c_1_2_3_question`, `c_1_2_4_answer`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '108', 13, 'INTERNATIONAL BRAND NAMES - Palbociclib Band / TRADE NAMES COST / PRICE', '<p>What are the international reference brand names of Generic drug Palbociclib? The actual Generic Drug and Base Medicine PALBOCICLIB is sold internationally under the most common marketing brand(s) IBRANCE,PALBACE. See our lowest Palbociclib Ibrance,Palbace cost / prices at the top of this page. 1</p>', NULL, '2022-05-09 05:07:40', '2022-06-14 14:40:17'),
(3, '108', 1, 'OVERVIEW - Information / Overview on Ibrance Palbace Palbociclib', '<p>What is the brief overview information on Generic Palbociclib / Brand Ibrance ? Information not available, sorry.</p>', NULL, '2022-05-09 05:07:40', '2022-07-19 02:16:15'),
(4, '108', 2, 'PRESCRIBED FOR - Palbociclib Ibrance Palbace Used for (Indications) at 2', '<p>What is the Branded Drug Ibrance / Generic Palbociclib used for (Indications) ? Information not available, sorry. at 2</p>', NULL, '2022-05-09 05:07:40', '2022-07-05 06:54:20'),
(5, '108', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Palbociclib Ibrance Palbace', 'When should Ibrance / Palbociclib medication not to be used (Contraindications) ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(6, '108', 5, 'DOSAGE - Ibrance Palbace Palbociclib Dosage / Dosing', 'What’s the prescribed Palbociclib Ibrance dosage / dosing requirement?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(7, '108', 6, 'MISSED A DOSE - Missed a Dose of Ibrance Palbace Palbociclib', 'What to do if Generic Palbociclib / Brand Ibrance dosage is missed ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(8, '108', 7, 'HOW TO TAKE - Palbociclib Ibrance Palbace Pills Uses', 'What are the Brand Ibrance / Generic Palbociclib drug / pills uses?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(9, '108', 8, 'WARNINGS - Precautions in using Palbociclib Ibrance Palbace', 'What are the Ibrance Palbociclib warnings and precautions before use ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(10, '108', 9, 'SIDE EFFECTS - Ibrance Palbace Palbociclib Side Effects', 'What are Palbociclib Ibrance side effects ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(11, '108', 3, 'OTHER PRECAUTIONS - Other Warnings on Ibrance Palbace Palbociclib ---', '<p>What are the other Brand name Ibrance / Generic Palbociclib Ibrance warnings and precautions? Information not available, sorry. ---</p>', NULL, '2022-05-09 05:07:40', '2022-07-05 06:46:40'),
(12, '108', 14, 'DRUG INTERACTIONS - Palbociclib Ibrance Palbace Interactions', '<p>What are Palbociclib Ibrance medication interactions with other drugs? Information not available, sorry.</p>', NULL, '2022-05-09 05:07:40', '2022-07-05 07:04:58'),
(13, '108', 12, 'STORAGE CONDITIONS - How to Store Palbociclib Ibrance Palbace', 'What are the storage conditions of Brand Name Ibrance / Generic Drug Palbociclib?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(14, '108', 15, 'AVAILABLE IN COUNTRIES ///', '<p>// To check drug availability, brand name, generic name, to know where to buy IBRANCE PALBACE / Palbociclib 75 mg / 100 mg / 125 mg Capsule Online @ HK Canada Pharmacy Marketplace Co., how much does a drug cost and manufacturer information; and also to buy low cost / price FDA Approved drugs online in various countries like Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam. Other countries for which you can check the prices of this page medicine and from where we can accept orders ( subject to customs clearance by buyer ) are Afghanistan, Albania, Algeria, American Samoa, Andorra, Angola, Anguilla, Antigua, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia, Bonaire, Bosnia and Herzegovina, Botswana, Brazil, Brunei, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canary Islands, Cape Verde, Cayman Islands, Central African Republic, Chad, Chile, China, Colombia, Comoros, Congo, Congo, The Democratic Republic, Cook Islands, Costa Rica, Cote d&#39;Ivoire, Croatia, Cuba, Curacao, Cyprus, Czech Republic, Denmark, Djibouti, Dominica, Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Eritrea, Estonia, Ethiopia, Falkland Islands, Faroe Islands, Fiji, Finland, France, French Guyana, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland, Grenada, Guadeloupe, Guam, Guatemala, Guernsey, Guinea Republic, Guinea-Bissau, Guinea-Equatorial, Guyana (British) , Haiti, Honduras, Hungary, Iceland, Indonesia, Iran, Iraq, Ireland, Israel, Italy, Jamaica, Japan, Jersey, Jordan, Kazakhstan, Kenya, Kiribati, Kosovo, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Lesotho, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg, Macau, Macedonia, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique, Mauritania, Mauritius, Mayotte, Mexico, Micronesia, Moldova, Monaco, Mongolia, Montenegro, Montserrat, Morocco, Mozambique, Myanmar, Namibia, Nauru, Nepal, Netherlands, Nevis, New Caledonia, New Zealand, Nicaragua, Niger, Nigeria, Niue, North Korea, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea, Paraguay, Peru, Philippines, Poland, Portugal, Puerto Rico, Qatar, Reunion Island, Romania, Russia, Rwanda, Saint Helena, Saipan, Samoa, San Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia, Slovenia, Solomon Islands, Somalia, Somaliland, South Africa, South Korea, South Sudan, Spain, Sri Lanka, St. Barthelemy, St. Eustatius, St. Kitts, St. Lucia, St. Maarten, St. Vincent, Sudan, Suriname, Swaziland, Sweden, Switzerland, Syria, Tahiti, Taiwan, Tajikistan, Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turks and Caicos Islands, Tuvalu, UAE, Uganda, UK, Ukraine, Uruguay, USA, Uzbekistan, Vanuatu, Vatican City State, Venezuela, Vietnam, Virgin Islands (British) , Virgin Islands (US) , Yemen, Zambia and Zimbabwe.</p>', NULL, '2022-05-09 05:07:40', '2022-07-05 07:08:00'),
(15, '108', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', 'The Generic Drug PALBOCICLIB is sold internationally under the most common brand name(s) IBRANCE. Patients/Buyers search for this drug’s brand name(s) Ibrance by typing the drug name and adding the keywords like ‘ibrance cost\' - \'ibrance medication\' - \'palbociclib cost\' - \'ibrance generic name\' - \'buy palbociclib\' - \'buy ibrance\' - \'ibrance 125 mg price\' - \'palbociclib generic\' - \'palbociclib tablet price\' - \'ibrance 100 mg price\' - \'palbociclib capsules price\' - \'buy ibrance online\' - \'ibrance side effects\' - \'palbociclib side effects\' - \'palbociclib cost\' - \'ibrance chemo\' - \'ibrance pfizer\' - \'ibrance medication\' - \'ibrance chemotherapy\' - \'ibrance generic\' - \'ibrance doses\' - \'ibrance 125 mg\' - \'palbociclib price\' - \'ibrance 75 mg\' - \'ibrance 100 mg\' - \'ibrance medicine\' - \'palbociclib generic’\n\nThis drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: |  Palbociclib / Ibrance / Palbace 75 mg / 100 mg / 125 mg Capsule |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC – Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.', '2022-05-11 14:06:42', '2022-05-09 05:07:40', '2022-05-11 14:06:42'),
(16, '109', 9, 'INTERNATIONAL BRAND NAMES - Paliperidone Palmitate Band / TRADE NAMES COST / PRICES', '<p>What are the international reference brand names of Generic drug Paliperidone Palmitate? The actual Generic Drug and Base Medicine PALIPERIDONE PALMITATE is sold internationally under the most common marketing brand(s) INVEGA. See our lowest Paliperidone Palmitate Invega cost / prices at the top of this page.</p>', NULL, '2022-05-09 05:07:40', '2022-06-14 14:41:00'),
(17, '109', 2, 'OVERVIEW - Information / Overview on Invega Sustenna Paliperidone Palmitate', 'What is the brief overview information on Generic Paliperidone Palmitate / Brand Invega ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(18, '109', 3, 'PRESCRIBED FOR - Paliperidone Palmitate Invega Sustenna Used for (Indications)', 'What is the Branded Drug Invega / Generic Paliperidone Palmitate used for (Indications) ?\n\nThis atypical antipsychotic drug, Paliperidone Palmitrate,  is taken when signs of schizophrenia are detected in the patients. It may change the activity of some specific natural substances in a patient\'s brain. ', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(19, '109', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Paliperidone Palmitate Invega Sustenna', 'When should Invega / Paliperidone Palmitate medication not to be used (Contraindications) ?\n\nHypersensitivity to Paliperidone, Risperidone, or any ingredient of the drug.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(20, '109', 5, 'DOSAGE - Invega Sustenna Paliperidone Palmitate Dosage / Dosing', 'What’s the prescribed Paliperidone Palmitate Invega dosage / dosing requirement?\n\nThe drug needs to be taken orally, and the dose should be 6 mg per day every morning. The recommended dose of the drug may need to be increased in some patients depending on the situation of the patient. The maximum dose of the drug is 12 mg per day.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(21, '109', 6, 'MISSED A DOSE - Missed a Dose of Invega Sustenna Paliperidone Palmitate', 'What to do if Generic Paliperidone Palmitate / Brand Invega dosage is missed ?', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(22, '109', 7, 'HOW TO TAKE - Paliperidone Palmitate Invega Sustenna Pills Uses', 'What are the Brand Invega / Generic Paliperidone Palmitate drug / pills uses?\n\nThe drug is available in the form of a tablet and needs to be taken by mouth. The dose should be taken usually one time in the morning with or without food.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(23, '109', 8, 'WARNINGS - Precautions in using Paliperidone Palmitate Invega Sustenna', 'What are the Invega Paliperidone Palmitate warnings and precautions before use ?\n\n• It may cause feel drowsy and thinking and movement difficulties. You should not drive a car or run a machine after the consumption of this medication.\n• It may cause lightheadedness, dizziness, and fainting if the patient gets up quickly from lying. So, the patient should get up or move slowly and calmly from the bed.\n• Avoid being overheated in summer weather. It may increase the level of blood sugar, so regular monitoring the glucose level in blood is important.\n• Hormonal imbalance or involuntary muscle movements can be other symptoms of consumption of the drug. If these happen, it is important to contact your doctor immediately.\n• Caution is needed if the patient is aged, or below 18 years, or pregnant.\n• Patients who have breast cancer life history, kidney, and liver diseases should be careful about it.\n• It may increase the prolactin levels rapidly in the blood.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(24, '109', 9, 'SIDE EFFECTS - Invega Sustenna Paliperidone Palmitate Side Effects', 'What are Paliperidone Palmitate Invega side effects ?\n\n• Most Common: Increasing weight, extra pyramidal signs, rapid heart rate, drowsiness, inner restlessness, indigestion, constipation, and inflammation of nasopharynx.\n• Heart: AV block, abnormal heartbeat.\n• Gastrointestinal: Dry mouth, abdominal pain, excess saliva secretion.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(25, '109', 10, 'OTHER PRECAUTIONS - Other Warnings on Invega Sustenna Paliperidone Palmitate', 'What are the other Brand name Invega / Generic Paliperidone Palmitate Invega warnings and precautions?\n\nThe patient should avoid consuming alcohol under this medication.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(26, '109', 11, 'DRUG INTERACTIONS - Paliperidone Palmitate Invega Sustenna Interactions', 'What are Paliperidone Palmitate Invega medication interactions with other drugs?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(27, '109', 12, 'STORAGE CONDITIONS - How to Store Paliperidone Palmitate Invega Sustenna', 'What are the storage conditions of Brand Name Invega / Generic Drug Paliperidone Palmitate?\n\nThis medication should be preserved in a container that is airtight and away from the children. You can preserve the medicine at room temperature and protected from excess moisture and heat.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(28, '109', 13, 'AVAILABLE IN COUNTRIES', 'To check drug availability, brand name, generic name, to know where to buy INVEGA SUSTENNA / Paliperidone Palmitate ER 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial  Online @ HK Canada Pharmacy Marketplace Co., how much does a drug cost and manufacturer information; and also to buy low cost / price FDA Approved drugs online in various countries like Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam.\nOther countries for which you can check the prices of this page medicine and from where we can accept orders ( subject to customs clearance by buyer ) are Afghanistan,  Albania,  Algeria,  American Samoa,  Andorra,  Angola,  Anguilla, Antigua, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia,  Bonaire, Bosnia and Herzegovina, Botswana, Brazil, Brunei, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canary Islands,  Cape Verde, Cayman Islands, Central African Republic, Chad, Chile, China, Colombia, Comoros, Congo, Congo,  The Democratic Republic, Cook Islands, Costa Rica, Cote d\'Ivoire, Croatia, Cuba, Curacao, Cyprus, Czech Republic, Denmark, Djibouti, Dominica, Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Eritrea, Estonia, Ethiopia, Falkland Islands, Faroe Islands, Fiji, Finland, France, French Guyana, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland, Grenada, Guadeloupe, Guam, Guatemala, Guernsey, Guinea Republic, Guinea-Bissau, Guinea-Equatorial, Guyana (British) , Haiti, Honduras, Hungary, Iceland, Indonesia, Iran, Iraq, Ireland, Israel, Italy,  Jamaica, Japan, Jersey, Jordan, Kazakhstan, Kenya, Kiribati, Kosovo, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Lesotho, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg, Macau, Macedonia, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique, Mauritania, Mauritius, Mayotte, Mexico, Micronesia, Moldova, Monaco, Mongolia, Montenegro, Montserrat, Morocco, Mozambique, Myanmar, Namibia, Nauru, Nepal, Netherlands, Nevis, New Caledonia, New Zealand, Nicaragua, Niger, Nigeria, Niue, North Korea, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea, Paraguay, Peru, Philippines, Poland, Portugal, Puerto Rico, Qatar, Reunion Island, Romania, Russia, Rwanda, Saint Helena, Saipan, Samoa, San Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia, Slovenia, Solomon Islands, Somalia, Somaliland, South Africa, South Korea, South Sudan, Spain, Sri Lanka, St. Barthelemy, St. Eustatius, St. Kitts, St. Lucia, St. Maarten, St. Vincent, Sudan, Suriname, Swaziland, Sweden, Switzerland, Syria, Tahiti, Taiwan, Tajikistan, Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turks and Caicos Islands, Tuvalu, UAE, Uganda, UK, Ukraine, Uruguay, USA, Uzbekistan, Vanuatu, Vatican City State, Venezuela, Vietnam, Virgin Islands (British) , Virgin Islands (US) , Yemen, Zambia and Zimbabwe.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(29, '109', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', 'The Generic Drug PALIPERIDONE PALMITATE ER is sold internationally under the most common brand name(s) INVEGA. Patients/Buyers search for this drug’s brand name(s) Invega by typing the drug name and adding the keywords like ‘invega sustenna price\' - \'invega sustenna cost\' - \'invega injection cost\' - \'buy invega\' - \'invega sustenna injection site\' - \'paliperidone injection cost\' - \'invega sustenna generic\' - \'invega sustenna 156 mg injection\' - \'paliperidone 150mg injection\' - \'paliperidone injection price\' - \'invega sustenna injection cost\' - \'invega sustenna 150 mg price\' - \'invega sustenna 150 mg injection\' - \'invega trinza generic’\n\nThis drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: |  Paliperidone Palmitate / Invega Sustenna 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC – Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(30, '110', 1, 'INTERNATIONAL BRAND NAMES - Palonosetron Band / TRADE NAMES COST / PRICES', 'What are the international reference brand names of Generic drug Palonosetron?\n\nThe actual Generic Drug and Base Medicine PALONOSETRON  is sold internationally under the most common marketing brand(s) ALOXI. See our lowest Palonosetron Aloxi cost / prices at the top of this page.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(31, '110', 2, 'OVERVIEW - Information / Overview on Aloxi Palonosetron', 'What is the brief overview information on Generic Palonosetron / Brand Aloxi ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(32, '110', 3, 'PRESCRIBED FOR - Palonosetron Aloxi Used for (Indications)', 'What is the Branded Drug Aloxi / Generic Palonosetron used for (Indications) ?\n\nThis drug belongs to the group of 5-HT3 receptor blockers, usually recommended for blocking nausea and retching induced by chemotherapy. It restricts the effects of serotonin, a natural hormone found in our body which causes vomiting and nausea.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(33, '110', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Palonosetron Aloxi', 'When should Aloxi / Palonosetron medication not to be used (Contraindications) ?\n\nAcute allergic reaction.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(34, '110', 5, 'DOSAGE - Aloxi Palonosetron Dosage / Dosing', 'What’s the prescribed Palonosetron Aloxi dosage / dosing requirement?\n\nIn adults: The dosage is 0.25 mg given intravenously in a period of 30 seconds.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(35, '110', 6, 'MISSED A DOSE - Missed a Dose of Aloxi Palonosetron', 'What to do if Generic Palonosetron / Brand Aloxi dosage is missed ?', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(36, '110', 7, 'HOW TO TAKE - Palonosetron Aloxi Pills Uses', 'What are the Brand Aloxi / Generic Palonosetron drug / pills uses?\n\nIt comes in a liquid form of injectable solution given by a health care provider intravenously.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(37, '110', 8, 'WARNINGS - Precautions in using Palonosetron Aloxi', 'What are the Aloxi Palonosetron warnings and precautions before use ?\n\n* Take proper precaution in the patients with prior cases of heart ailment, lower blood minerals, allergic reactions, other treatments, underaged patients, pregnant and lactating women.\n* It might result in sleepiness or faintness; Therefore, it is not advised to operate heavy machinery or drive a car.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(38, '110', 9, 'SIDE EFFECTS - Aloxi Palonosetron Side Effects', 'What are Palonosetron Aloxi side effects ?\n\nMost Common: Migraine, Blocked stool, Loose motion, nausea, extreme tiredness, stomachache, and drowsiness.\nHeart: Rapid heart rhythm, increased or decreased blood pressure, irregular heartbeat, and heart failure.\nSkin: Skin redness and rashes.\nENT: Vertigo, buzzing in year, irritation in eyes, and abnormal vision.\nGastrointestinal: Problems with digestions, dehydrated mouth, gas, and hiccups.\nGeneral: Fatigue, increased temperature, influenza-like symptoms, and hot flashes.\n Liver: Elevated level of liver enzyme.\nMetabolic: Higher blood minerals, diabetes, lack of hunger, heartburn.\nMusculoskeletal: Joint ache.\nCentral Nervous System: Sleepiness, drowsiness, tingly feeling, nervousness, and emotional disturbance.\nGenitourinary: Urine retention.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(39, '110', 10, 'OTHER PRECAUTIONS - Other Warnings on Aloxi Palonosetron', 'What are the other Brand name Aloxi / Generic Palonosetron Aloxi warnings and precautions?\n\nRefrain from overdosing.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(40, '110', 11, 'DRUG INTERACTIONS - Palonosetron Aloxi Interactions', 'What are Palonosetron Aloxi medication interactions with other drugs?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(41, '110', 12, 'STORAGE CONDITIONS - How to Store Palonosetron Aloxi', 'What are the storage conditions of Brand Name Aloxi / Generic Drug Palonosetron?\n\nStorage is suggested in controlled room temperature from 20 to 25°C away from light.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(42, '110', 13, 'AVAILABLE IN COUNTRIES', 'To check drug availability, brand name, generic name, to know where to buy ALOXI / Palonosetron 0.25 mg / 0.5 mg Injection Vial / Tablet  Online @ HK Canada Pharmacy Marketplace Co., how much does a drug cost and manufacturer information; and also to buy low cost / price FDA Approved drugs online in various countries like Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam.\nOther countries for which you can check the prices of this page medicine and from where we can accept orders ( subject to customs clearance by buyer ) are Afghanistan,  Albania,  Algeria,  American Samoa,  Andorra,  Angola,  Anguilla, Antigua, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia,  Bonaire, Bosnia and Herzegovina, Botswana, Brazil, Brunei, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canary Islands,  Cape Verde, Cayman Islands, Central African Republic, Chad, Chile, China, Colombia, Comoros, Congo, Congo,  The Democratic Republic, Cook Islands, Costa Rica, Cote d\'Ivoire, Croatia, Cuba, Curacao, Cyprus, Czech Republic, Denmark, Djibouti, Dominica, Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Eritrea, Estonia, Ethiopia, Falkland Islands, Faroe Islands, Fiji, Finland, France, French Guyana, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland, Grenada, Guadeloupe, Guam, Guatemala, Guernsey, Guinea Republic, Guinea-Bissau, Guinea-Equatorial, Guyana (British) , Haiti, Honduras, Hungary, Iceland, Indonesia, Iran, Iraq, Ireland, Israel, Italy,  Jamaica, Japan, Jersey, Jordan, Kazakhstan, Kenya, Kiribati, Kosovo, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Lesotho, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg, Macau, Macedonia, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique, Mauritania, Mauritius, Mayotte, Mexico, Micronesia, Moldova, Monaco, Mongolia, Montenegro, Montserrat, Morocco, Mozambique, Myanmar, Namibia, Nauru, Nepal, Netherlands, Nevis, New Caledonia, New Zealand, Nicaragua, Niger, Nigeria, Niue, North Korea, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea, Paraguay, Peru, Philippines, Poland, Portugal, Puerto Rico, Qatar, Reunion Island, Romania, Russia, Rwanda, Saint Helena, Saipan, Samoa, San Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia, Slovenia, Solomon Islands, Somalia, Somaliland, South Africa, South Korea, South Sudan, Spain, Sri Lanka, St. Barthelemy, St. Eustatius, St. Kitts, St. Lucia, St. Maarten, St. Vincent, Sudan, Suriname, Swaziland, Sweden, Switzerland, Syria, Tahiti, Taiwan, Tajikistan, Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turks and Caicos Islands, Tuvalu, UAE, Uganda, UK, Ukraine, Uruguay, USA, Uzbekistan, Vanuatu, Vatican City State, Venezuela, Vietnam, Virgin Islands (British) , Virgin Islands (US) , Yemen, Zambia and Zimbabwe.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(43, '110', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', 'The Generic Drug PALONOSETRON is sold internationally under the most common brand name(s) ALOXI. Patients/Buyers search for this drug’s brand name(s) Aloxi by typing the drug name and adding the keywords like ‘aloxi generic name\' - \'palonosetron brand name\' - \'aloxi medication\' - \'aloxi injection\' - \'palonosetron price\' - \'aloxi generic\' - \'palonosetron generic\' - \'generic aloxi’\n\nThis drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: |  Palonosetron / Aloxi 0.25 mg / 0.5 mg Injection Vial / Tablet |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC – Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(44, '111', 1, 'INTERNATIONAL BRAND NAMES - Pamidronate Disodium Band / TRADE NAMES COST / PRICES', 'What are the international reference brand names of Generic drug Pamidronate Disodium?\n\nThe actual Generic Drug and Base Medicine PAMIDRONATE DISODIUM  is sold internationally under the most common marketing brand(s) AREDIA. See our lowest Pamidronate Disodium Aredia cost / prices at the top of this page.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(45, '111', 2, 'OVERVIEW - Information / Overview on Aredia Pamidronate Disodium', 'What is the brief overview information on Generic Pamidronate / Brand Aredia ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(46, '111', 3, 'PRESCRIBED FOR - Pamidronate Disodium Aredia Used for (Indications)', 'What is the Branded Drug Aredia / Generic Pamidronate used for (Indications) ?\n\nThis drug is a bisphosphonate and is recommended to improve Paget\'s disease, a bone condition. In this disease, the bones become soft, weak, and sometimes deformed, painful, and easily breakable. Moreover, a high level of blood calcium (hypercalcemia) may occur along with multiple myeloma or cancer when the bone gets affected. The medication acts by slowing the breakdown of bone, increasing bone density or thickness, and lowering the level of calcium released I the blood from the bones.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(47, '111', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Pamidronate Disodium Aredia', 'When should Aredia / Pamidronate medication not to be used (Contraindications) ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(48, '111', 5, 'DOSAGE - Aredia Pamidronate Disodium Dosage / Dosing', 'What’s the prescribed Pamidronate Aredia dosage / dosing requirement?\n\nAdults with IV- Paget\'s disease of bone are suggested to take 30 m dose per day is suggested consecutive 3 days.\nPatients with hypercalcemia are suggested to take 60 to 90mg single dose for 2 to 24 hours.\nPatients suffering from the Bone disease with Multiple Myeloma are suggested to take 90 mg dose administered in the form of a 4-hour infusion once in a month.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(49, '111', 6, 'MISSED A DOSE - Missed a Dose of Aredia Pamidronate Disodium', 'What to do if Generic Pamidronate / Brand Aredia dosage is missed ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(50, '111', 7, 'HOW TO TAKE - Pamidronate Disodium Aredia Pills Uses', 'What are the Brand Aredia / Generic Pamidronate drug / pills uses?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(51, '111', 8, 'WARNINGS - Precautions in using Pamidronate Disodium Aredia', 'What are the Aredia Pamidronate warnings and precautions before use ?\n\n• The patient with high calcium levels should not take supplements of calcium and vitamin D.\n• Avoiding dental treatment under this medication is preferred to stay away from osteonecrosis of your jaw.\n• The heart failure risk may be increased under this medication in patients who have heart disease.\n• The injection should be administrated slowly to keep the risk of side effects reduced (e.g., kidney impairment, injection site reactions).\n• Monitoring blood counts is essential for the patients who already have poor blood counts.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(52, '111', 9, 'SIDE EFFECTS - Aredia Pamidronate Disodium Side Effects', 'What are Pamidronate Aredia side effects ?\n\n• General: Fever, generalized pain, reactivation of viral diseases. A flu-like reaction may occur initially.\n• Heart: High level of blood pressure, heart failure, abnormal heartbeat rate or rhythm, syncope.\n• Central Nervous System: Confusion, drowsiness, electrolyte imbalance, visual hallucinations, sleeplessness, nervousness, mental or mood changes.\n• Gastrointestinal: Loss of appetite, abdominal pain, constipation, nausea, diarrhea, vomiting, mouth ulcer, jaw osteonecrosis gastrointestinal hemorrhage.\n• Genitourinary: Renal tubular disorders (RTD), high blood urea.\n• Skin: Itching, Rash.\n• Eye: Eye tissue inflammation.\n• Blood: Decreasing the levels of white blood cells, red blood cells, and platelets.\n• Metabolic: Low level of thyroid hormone, calcium, magnesium, potassium, phosphate in the blood.\n• Respiratory: Upper respiratory infection, respiratory distress syndrome among adults (ARDS and interstitial lung disease (ILD).\n• Musculoskeletal: Bone ache and muscle pain\nRare examples of allergic manifestations are reported, low level of blood pressure, breathing problem, or angioedema, and anaphylactic shock in a very rare case.\nPotentially Fatal: Acute heart and kidney failure.\n', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(53, '111', 10, 'OTHER PRECAUTIONS - Other Warnings on Aredia Pamidronate Disodium', 'What are the other Brand name Aredia / Generic Pamidronate Aredia warnings and precautions?\n\nThe patient may experience bone or muscle pain anytime under this medication.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(54, '111', 11, 'DRUG INTERACTIONS - Pamidronate Disodium Aredia Interactions', 'What are Pamidronate Aredia medication interactions with other drugs?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(55, '111', 12, 'STORAGE CONDITIONS - How to Store Pamidronate Disodium Aredia', 'What are the storage conditions of Brand Name Aredia / Generic Drug Pamidronate?\n\nInjection: preserve the medicine at normal room temperature. After reconstitution: It should be perfect for up to one day when kept in the refrigerator at 2-8°C.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(56, '111', 13, 'AVAILABLE IN COUNTRIES', 'To check drug availability, brand name, generic name, to know where to buy AREDIA / Pamidronate Disodium 15 mg / 30 mg / 60 mg / 90 mg Injection Vial  Online @ HK Canada Pharmacy Marketplace Co., how much does a drug cost and manufacturer information; and also to buy low cost / price FDA Approved drugs online in various countries like Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam.\nOther countries for which you can check the prices of this page medicine and from where we can accept orders ( subject to customs clearance by buyer ) are Afghanistan,  Albania,  Algeria,  American Samoa,  Andorra,  Angola,  Anguilla, Antigua, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia,  Bonaire, Bosnia and Herzegovina, Botswana, Brazil, Brunei, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canary Islands,  Cape Verde, Cayman Islands, Central African Republic, Chad, Chile, China, Colombia, Comoros, Congo, Congo,  The Democratic Republic, Cook Islands, Costa Rica, Cote d\'Ivoire, Croatia, Cuba, Curacao, Cyprus, Czech Republic, Denmark, Djibouti, Dominica, Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Eritrea, Estonia, Ethiopia, Falkland Islands, Faroe Islands, Fiji, Finland, France, French Guyana, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland, Grenada, Guadeloupe, Guam, Guatemala, Guernsey, Guinea Republic, Guinea-Bissau, Guinea-Equatorial, Guyana (British) , Haiti, Honduras, Hungary, Iceland, Indonesia, Iran, Iraq, Ireland, Israel, Italy,  Jamaica, Japan, Jersey, Jordan, Kazakhstan, Kenya, Kiribati, Kosovo, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Lesotho, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg, Macau, Macedonia, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique, Mauritania, Mauritius, Mayotte, Mexico, Micronesia, Moldova, Monaco, Mongolia, Montenegro, Montserrat, Morocco, Mozambique, Myanmar, Namibia, Nauru, Nepal, Netherlands, Nevis, New Caledonia, New Zealand, Nicaragua, Niger, Nigeria, Niue, North Korea, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea, Paraguay, Peru, Philippines, Poland, Portugal, Puerto Rico, Qatar, Reunion Island, Romania, Russia, Rwanda, Saint Helena, Saipan, Samoa, San Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia, Slovenia, Solomon Islands, Somalia, Somaliland, South Africa, South Korea, South Sudan, Spain, Sri Lanka, St. Barthelemy, St. Eustatius, St. Kitts, St. Lucia, St. Maarten, St. Vincent, Sudan, Suriname, Swaziland, Sweden, Switzerland, Syria, Tahiti, Taiwan, Tajikistan, Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turks and Caicos Islands, Tuvalu, UAE, Uganda, UK, Ukraine, Uruguay, USA, Uzbekistan, Vanuatu, Vatican City State, Venezuela, Vietnam, Virgin Islands (British) , Virgin Islands (US) , Yemen, Zambia and Zimbabwe.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(57, '111', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', 'The Generic Drug PAMIDRONATE DISODIUM is sold internationally under the most common brand name(s) AREDIA. Patients/Buyers search for this drug’s brand name(s) Aredia by typing the drug name and adding the keywords like ‘aredia medication\' - \'aredia injection\' - \'pamidronate price\' - \'aredia cost’\n\nThis drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: |  Pamidronate Disodium / Aredia 15 mg / 30 mg / 60 mg / 90 mg Injection Vial |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC – Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(58, '112', 1, 'INTERNATIONAL BRAND NAMES - Pancreatin Band / TRADE NAMES COST / PRICES', 'What are the international reference brand names of Generic drug Pancreatin?\n\nThe actual Generic Drug and Base Medicine PANCREATIN  is sold internationally under the most common marketing brand(s) CREON,ZENPEP. See our lowest Pancreatin Creon,Zenpep cost / prices at the top of this page.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(59, '112', 2, 'OVERVIEW - Information / Overview on Creon Pancreatin', 'What is the brief overview information on Generic Pancreatin / Brand Creon Zenpep ?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(60, '112', 3, 'PRESCRIBED FOR - Pancreatin Creon Used for (Indications)', 'What is the Branded Drug Creon Zenpep / Generic Pancreatin used for (Indications) ?\n\nThis drug is a combination of digestive enzyme, recommended for indigestion (dyspepsia), acute pancreatitis, cystic fibrosis, and pancreatectomy. It aids the body to break down the fat, protein, and starch.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(61, '112', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Pancreatin Creon', 'When should Creon Zenpep / Pancreatin medication not to be used (Contraindications) ?\n\nAcute allergic reaction.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(62, '112', 5, 'DOSAGE - Creon Pancreatin Dosage / Dosing', 'What’s the prescribed Pancreatin Creon Zenpep dosage / dosing requirement?\n\nIn adults: The dosage prescribed is 500 units per kg weight to be taken by mouth with food. The maintenance dose is 400-2500 units per kg weight to be taken orally with food.\nIn children < 1 year old: 2000-4000 units mixed per 120 ml of breast milk or formula milk or in addition to breastfeeding.\nChildren> 1 year old and < 4 years old: The primary dose is 1000 units per kg weight with food. The maintenance dose ranges from 1000 to 2500 units per kg with food.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(63, '112', 6, 'MISSED A DOSE - Missed a Dose of Creon Pancreatin', 'What to do if Generic Pancreatin / Brand Creon Zenpep dosage is missed ?', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(64, '112', 7, 'HOW TO TAKE - Pancreatin Creon Pills Uses', 'What are the Brand Creon Zenpep / Generic Pancreatin drug / pills uses?\n\nIt comes in a capsule, tablet, and powder form to be taken orally, with a meal and an adequate amount of water.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(65, '112', 8, 'WARNINGS - Precautions in using Pancreatin Creon', 'What are the Creon Zenpep Pancreatin warnings and precautions before use ?\n\n* Proper precaution to be taken in the patients with prior cases of pancreatitis, issues with abdominal and bowel movement, allergic reaction, cystic fibrosis, under other treatments, in case of pregnant and lactating women.\n* It can result in nausea, unclear visions; therefore, driving or operating heavy machinery under this treatment is not suggested. Also, it is not recommended to take this drug with warm fluids or a meal because it might suppress the effect of the supplements.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(66, '112', 9, 'SIDE EFFECTS - Creon Pancreatin Side Effects', 'What are Pancreatin Creon Zenpep side effects ?\n\n• Most Common: Retching, nausea, unclear vision, wheeze.\n• Gastrointestinal: Stomachache, loose motion, gas, blocked stool, dizziness.\n• Skin: Itchiness, rashes, urticaria.\n• Musculoskeletal: Painful muscle and muscle contraction.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(67, '112', 10, 'OTHER PRECAUTIONS - Other Warnings on Creon Pancreatin', 'What are the other Brand name Creon Zenpep / Generic Pancreatin Creon Zenpep warnings and precautions?\n\nRefrain from overdosing.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(68, '112', 11, 'DRUG INTERACTIONS - Pancreatin Creon Interactions', 'What are Pancreatin Creon Zenpep medication interactions with other drugs?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(69, '112', 12, 'STORAGE CONDITIONS - How to Store Pancreatin Creon', 'What are the storage conditions of Brand Name Creon Zenpep / Generic Drug Pancreatin?\n\nInformation not available, sorry.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(70, '112', 13, 'AVAILABLE IN COUNTRIES', 'To check drug availability, brand name, generic name, to know where to buy CREON / Pancreatin 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres  Online @ HK Canada Pharmacy Marketplace Co., how much does a drug cost and manufacturer information; and also to buy low cost / price FDA Approved drugs online in various countries like Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam.\nOther countries for which you can check the prices of this page medicine and from where we can accept orders ( subject to customs clearance by buyer ) are Afghanistan,  Albania,  Algeria,  American Samoa,  Andorra,  Angola,  Anguilla, Antigua, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia,  Bonaire, Bosnia and Herzegovina, Botswana, Brazil, Brunei, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canary Islands,  Cape Verde, Cayman Islands, Central African Republic, Chad, Chile, China, Colombia, Comoros, Congo, Congo,  The Democratic Republic, Cook Islands, Costa Rica, Cote d\'Ivoire, Croatia, Cuba, Curacao, Cyprus, Czech Republic, Denmark, Djibouti, Dominica, Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Eritrea, Estonia, Ethiopia, Falkland Islands, Faroe Islands, Fiji, Finland, France, French Guyana, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland, Grenada, Guadeloupe, Guam, Guatemala, Guernsey, Guinea Republic, Guinea-Bissau, Guinea-Equatorial, Guyana (British) , Haiti, Honduras, Hungary, Iceland, Indonesia, Iran, Iraq, Ireland, Israel, Italy,  Jamaica, Japan, Jersey, Jordan, Kazakhstan, Kenya, Kiribati, Kosovo, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Lesotho, Liberia, Libya, Liechtenstein, Lithuania, Luxembourg, Macau, Macedonia, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique, Mauritania, Mauritius, Mayotte, Mexico, Micronesia, Moldova, Monaco, Mongolia, Montenegro, Montserrat, Morocco, Mozambique, Myanmar, Namibia, Nauru, Nepal, Netherlands, Nevis, New Caledonia, New Zealand, Nicaragua, Niger, Nigeria, Niue, North Korea, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea, Paraguay, Peru, Philippines, Poland, Portugal, Puerto Rico, Qatar, Reunion Island, Romania, Russia, Rwanda, Saint Helena, Saipan, Samoa, San Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia, Slovenia, Solomon Islands, Somalia, Somaliland, South Africa, South Korea, South Sudan, Spain, Sri Lanka, St. Barthelemy, St. Eustatius, St. Kitts, St. Lucia, St. Maarten, St. Vincent, Sudan, Suriname, Swaziland, Sweden, Switzerland, Syria, Tahiti, Taiwan, Tajikistan, Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turks and Caicos Islands, Tuvalu, UAE, Uganda, UK, Ukraine, Uruguay, USA, Uzbekistan, Vanuatu, Vatican City State, Venezuela, Vietnam, Virgin Islands (British) , Virgin Islands (US) , Yemen, Zambia and Zimbabwe.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40');
INSERT INTO `1-2-meds-info` (`id`, `c_1_2_1_generic_id_no`, `c_1_2_2_qs_no`, `c_1_2_3_question`, `c_1_2_4_answer`, `deleted_at`, `created_at`, `updated_at`) VALUES
(71, '112', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', 'The Generic Drug PANCREATIN is sold internationally under the most common brand name(s) CREON. Patients/Buyers search for this drug’s brand name(s) Creon by typing the drug name and adding the keywords like ‘creon generic\' - \'creon medication price\' - \'buy pancreatin\' - \'buy creon\' - \'creon medication generic\' - \'creon 10000 buy online\' - \'creon 25000 tablet price\' - \'pancreatin capsules 150mg\' - \'creon 25000 buy online\' - \'pancreatin capsules 300mg\' - \'creon capsule price\' - \'creon generic cost\' - \'creon 36000 generic\' - \'creon capsule generic’\n\nThis drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: |  Pancreatin / Creon 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC – Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.', NULL, '2022-05-09 05:07:40', '2022-05-09 05:07:40'),
(72, '108', 5, 'Hi', '<p>Bye</p>', '2022-07-05 07:04:09', '2022-05-11 14:04:24', '2022-07-05 07:04:09'),
(73, '108', 2, 'dfds', '<p>sdfads</p>', '2022-07-05 06:52:47', '2022-05-27 09:03:25', '2022-07-05 06:52:47'),
(74, '108', 14, 'fsdfsdf', '<p>sfsdfsdf</p>', '2022-05-27 09:07:35', '2022-05-27 09:07:11', '2022-05-27 09:07:35'),
(75, '108', 14, 'rewr', '<p>dsdas</p>', '2022-05-27 09:08:43', '2022-05-27 09:08:28', '2022-05-27 09:08:43'),
(76, '114', 1, 'INTERNATIONAL BRAND NAMES - Panobinostat Band / TRADE NAMES COST / PRICES', '<p>What are the international reference brand names of Generic drug Panobinostat?</p>\r\n\r\n<p>The actual Generic Drug and Base Medicine PANOBINOSTAT &nbsp;is sold internationally under the most common marketing brand(s) FARYDAK,IXAPANA. See our lowest Panobinostat Farydak,Ixapana cost / prices at the top of this page.</p>', NULL, '2022-07-04 05:35:29', '2022-07-04 05:35:29'),
(77, '114', 2, 'OVERVIEW - Information / Overview on Farydak Ixapana Panobinostat', '<p>What is the brief overview information on Generic Panobinostat / Brand Farydak ?</p>\r\n\r\n<p>Panobinostat is the medicine for treating a particular type of cancer called myeloma. This drug is taken along with dexamethasone and bortezomib. The drug is used when at least two other medicine courses are already tried in treating multiple myeloma.&nbsp;</p>', NULL, '2022-07-04 05:36:06', '2022-07-04 05:36:06'),
(78, '114', 3, 'PRESCRIBED FOR - Panobinostat Farydak Ixapana Used for (Indications)', '<p>What is the Branded Drug Farydak / Generic Panobinostat used for (Indications) ?</p>\r\n\r\n<p>Panobinostat capsules are given to the patients who are suffering from multiple myeloma along with other drugs like dexamethasone and bortezomib. This drug is prescribed when the patient has already been treated with bortezomib and any other immunomodulatory agent previously.</p>', NULL, '2022-07-04 05:39:22', '2022-07-04 05:39:22'),
(79, '114', 4, 'NOT TO BE TAKEN IN CONDITIONS - Contraindications of Panobinostat Farydak Ixapana', '<p>When should Farydak / Panobinostat medication not to be used (Contraindications) ?</p>\r\n\r\n<p>The patients who are allergic to Panobinostat should not be prescribed this drug.&nbsp;</p>', NULL, '2022-07-04 05:42:51', '2022-07-04 05:42:51'),
(80, '114', 5, 'DOSAGE - Farydak Ixapana Panobinostat Dosage / Dosing', '<p>What&rsquo;s the prescribed Panobinostat Farydak dosage / dosing requirement?</p>\r\n\r\n<p>At the starting of the application of Panobinostat, 20mg doses are recommended to take orally one time in every alternative day. That means three doses of 20 mg in a week for the first two weeks of a 21-day cycle. This dosage is repeatable for maximum 8cycles.&nbsp;<br />\r\nThe treatment can be prolonged for another eight cycles only if no severe side-effect is found in the patient. In 48 weeks, 16 cycles can be repeated. Along with Panobinostat, Bortezomib 1.3mg7/ m2 injection and 20 mg dexamethasone tablets are given after meal.</p>', NULL, '2022-07-04 05:43:07', '2022-07-04 05:43:07'),
(81, '114', 6, 'MISSED A DOSE - Missed a Dose of Farydak Ixapana Panobinostat', '<p>What to do if Generic Panobinostat / Brand Farydak dosage is missed ?</p>\r\n\r\n<p>If the patient misses one dose of Panobinostat capsule at the right time, then he or she can take it within 12 hours from the right time. If the patient experiences are vomiting, then the missed dose should be skipped and taken on the next scheduled time.</p>', NULL, '2022-07-04 05:43:20', '2022-07-04 05:43:20'),
(82, '114', 7, 'HOW TO TAKE - Panobinostat Farydak Ixapana Pills Uses', '<p>What are the Brand Farydak / Generic Panobinostat drug / pills uses?</p>\r\n\r\n<p>Panobinostat capsules should be taken orally when the dose is 10mg, 15 mg, or 20 mg. In the mid of the cycle, the patient should not stop taking the drug without any professional guidance.</p>', NULL, '2022-07-04 05:44:19', '2022-07-04 05:44:19'),
(83, '114', 8, 'WARNINGS - Precautions in using Panobinostat Farydak Ixapana', '<p>What are Panobinostat Farydak side effects ?</p>\r\n\r\n<p>There are a few side effects that the patient may experience after taking the drug.&nbsp;</p>\r\n\r\n<p>Gastrointestinal side effect: Diarrhea, nausea, fatigue, peripheral edema or accumulation of water, vomiting, and decreased appetite.<br />\r\n&bull; Haematological: anemia or low Hemoglobin, low level of platelet count, low white blood cell count, low level of phosphorous, and potassium in the blood.<br />\r\n&bull; Nervous system: headache, dizziness, syncope or fainting, dysgeusia or altered taste<br />\r\n&bull; Cardiovascular: palpitations or increased heart rate<br />\r\n&bull; Respiratory: cough, wheezing, or abnormal sounds from lung, respiratory failure<br />\r\n&bull; Vascular system: hypertension or High blood pressure, hypotension or low-level blood pressure<br />\r\n&bull; Skin and subcutaneous disorders: rash on skin, erythema or redness of the skin<br />\r\n&bull; Musculoskeletal disorders: joint swelling.<br />\r\n&bull; Renal and urinary disorders: urinary incontinence or uncontrolled leak of urine, Kidney failure<br />\r\n&bull; General disorders and the administration site conditions: chills.<br />\r\n&bull; Lab monitoring should be done to track the level of blood urea, glomerular filtration rate, blood alkaline, or phosphatase levels.</p>', NULL, '2022-07-04 05:44:34', '2022-07-04 05:44:34'),
(84, '114', 9, 'SIDE EFFECTS - Farydak Ixapana Panobinostat Side Effects', '<p>What are Panobinostat Farydak side effects ?</p>\r\n\r\n<p>There are a few side effects that the patient may experience after taking the drug.&nbsp;</p>\r\n\r\n<p>Gastrointestinal side effect: Diarrhea, nausea, fatigue, peripheral edema or accumulation of water, vomiting, and decreased appetite.<br />\r\n&bull; Haematological: anemia or low Hemoglobin, low level of platelet count, low white blood cell count, low level of phosphorous, and potassium in the blood.<br />\r\n&bull; Nervous system: headache, dizziness, syncope or fainting, dysgeusia or altered taste<br />\r\n&bull; Cardiovascular: palpitations or increased heart rate<br />\r\n&bull; Respiratory: cough, wheezing, or abnormal sounds from lung, respiratory failure<br />\r\n&bull; Vascular system: hypertension or High blood pressure, hypotension or low-level blood pressure<br />\r\n&bull; Skin and subcutaneous disorders: rash on skin, erythema or redness of the skin<br />\r\n&bull; Musculoskeletal disorders: joint swelling.<br />\r\n&bull; Renal and urinary disorders: urinary incontinence or uncontrolled leak of urine, Kidney failure<br />\r\n&bull; General disorders and the administration site conditions: chills.<br />\r\n&bull; Lab monitoring should be done to track the level of blood urea, glomerular filtration rate, blood alkaline, or phosphatase levels.</p>', NULL, '2022-07-04 05:45:14', '2022-07-04 05:45:14'),
(85, '114', 10, 'OTHER PRECAUTIONS - Other Warnings on Farydak Ixapana Panobinostat', '<p>What are the other Brand name Farydak / Generic Panobinostat Farydak warnings and precautions?</p>\r\n\r\n<p>&bull; Women who have taken the last dose of Panobinostat should be under effective contraception at least 30 days.&nbsp;<br />\r\n&bull; Men who have taken the last dose of Panobinostat should use condoms.&nbsp;<br />\r\n&bull; The contact of Panobinostat with the mucous or skin is harmful, so the patient should avoid it, and if it happens, then washing with the plain water is important.&nbsp;<br />\r\n&bull; It should be kept away from the reach of kids<br />\r\n&bull; If the patient experience anything severe like heartbeat changes, swelling in hands, or legs, skin rashes, discomfort, chest pain, bleeding, diarrhea, then don&rsquo;t be late to report the doctor.</p>', NULL, '2022-07-04 05:45:40', '2022-07-04 05:45:40'),
(86, '114', 11, 'DRUG INTERACTIONS - Panobinostat Farydak Ixapana Interactions', '<p>What are Panobinostat Farydak medication interactions with other drugs?</p>\r\n\r\n<p>In the starting, the drug dose should be 10mg if it is taken with Boceprevir, Conivaptan, Clarithromycin, Ketoconazole, or antifungal drugs, such as Itraconazole, Lopinavir or Ritonavir or any anti-HIV drugs.&nbsp;<br />\r\nPatients should also avoid pomegranate or its juice, star fruit, and grapefruit or its juice because these interfere in the Panobinostat&rsquo;s blood levels.<br />\r\nPanobinostat may raise the blood levels of atomoxetine, dextromethorphan, desipramine, metoprolol, perphenazine, tolterodine, nebivolol, and the other drugs with narrow safety margins like pimozide or thioridazine.<br />\r\nFrequent ECG monitoring is essential when Panobinostat is prescribed with anti-arrhythmic drugs (drugs that are used to maintain normal heart rhythm).</p>', NULL, '2022-07-04 05:45:55', '2022-07-04 05:45:55'),
(87, '114', 12, 'STORAGE CONDITIONS - How to Store Panobinostat Farydak Ixapana', '<p>What are the storage conditions of Brand Name Farydak / Generic Drug Panobinostat?</p>\r\n\r\n<p>This can be stored at room temperature that is 20&deg;C to 25&deg;C.<br />\r\nProtect the capsules from direct sunlight and excess humid weather.<br />\r\nOne should not crush or chew capsules.</p>', NULL, '2022-07-04 05:47:02', '2022-07-04 05:47:02'),
(88, '114', 13, 'AVAILABLE IN COUNTRIES', '<p>The Generic Drug PANOBINOSTAT is sold internationally under the most common brand name(s) FARYDAK. Patients/Buyers search for this drug&rsquo;s brand name(s) Farydak by typing the drug name and adding the keywords like &lsquo;panobinostat price&#39; - &#39;panobinostat brand name&#39; - &#39;farydak multiple myeloma&#39; - &#39;farydak cost&#39; - &#39;farydak manufacturer&#39; - &#39;panobinostat cost&rsquo;</p>\r\n\r\n<p>This drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp;amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: | &nbsp;Panobinostat / Farydak / Ixapana 10 mg / 15 mg / 20 mg Capsule |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp;amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC &ndash; Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.</p>', NULL, '2022-07-04 05:47:23', '2022-07-04 05:47:23'),
(89, '114', 14, 'GOOGLE SEARCH KEYWORDS / TAGS', '<p>The Generic Drug PANOBINOSTAT is sold internationally under the most common brand name(s) FARYDAK. Patients/Buyers search for this drug&rsquo;s brand name(s) Farydak by typing the drug name and adding the keywords like &lsquo;panobinostat price&#39; - &#39;panobinostat brand name&#39; - &#39;farydak multiple myeloma&#39; - &#39;farydak cost&#39; - &#39;farydak manufacturer&#39; - &#39;panobinostat cost&rsquo;</p>\r\n\r\n<p>This drug is offered on our web platform under Our Guarantee of a 100% CUSTOMS CLEARED DELIVERY for Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela and Vietnam &amp;amp; many other countries. We give a GUARANTEED! Lowest Cost, High Discount, Online Pharmacy Price for this drug: | &nbsp;Panobinostat / Farydak / Ixapana 10 mg / 15 mg / 20 mg Capsule |. With us, you BUY DIRECT from LEGAL PHARMACIES / WHOcGMP certified &amp;amp; FDA approved Manufacturers in Australia, Canada, India, Mauritius, NZ, Singapore, Turkey, UK ; USA a complete range of Generic and Branded Drugs for Cancer, AIDS/HIV, Anticoagulants, Antiviral, Cholesterol, Diabetes, Chronic Kidney Disease CKD/Anemia, COPD, Hepatitis, Immunosuppressive and Osteoporosis treatment. Drugs bought from our platform are Guaranteed to be Genuine as approved by, but not limited to, the Drugs Approval authorities of the following countries : Australia : TGA - Therapeutic Goods Administration Canada : HC &ndash; Health Canada EU : EMEA - European Medicines Agency India : CDSCO - Central Drugs Standard Control Organization Mauritius : MHQL - Ministry of Health and Quality of Life NZ : MedSafe - Medicines and Medical Devices Safety Authority Singapore : HSA - Health Sciences Authority Turkey : TMMDA - Turkish Medicines and Medical Devices Agency UK : MHRA - Medicines and Healthcare products Regulatory Agency USA : USFDA - US Food and Drug Administration.</p>', NULL, '2022-07-04 05:47:45', '2022-07-04 05:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `1-3-meds-leaflets`
--

CREATE TABLE `1-3-meds-leaflets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_1_3_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_3_2_pdf_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_3_3_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_3_4_pdf_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `1-3-meds-leaflets`
--

INSERT INTO `1-3-meds-leaflets` (`id`, `c_1_3_1_generic_id_no`, `c_1_3_2_pdf_no`, `c_1_3_3_language`, `c_1_3_4_pdf_file`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, '109', '3', 'Arabic', '108-1-Palbociclib-Ibrance-Palbace-Medication-Patient-Information-In-English.pdf', 0, NULL, '2022-05-03 07:28:58', '2022-05-03 07:28:58'),
(8, '108', '1', 'English', '108-1-Palbociclib-Ibrance-Palbace-Medication-Patient-Information-In-English.pdf', 0, NULL, '2022-05-07 09:49:36', '2022-05-07 09:49:36'),
(9, '108', '2', 'Filipino', '108-6-Palbociclib-Ibrance-Palbace-Medication-Patient-Information-In-Filipino.pdf', 0, NULL, '2022-05-07 09:49:53', '2022-05-07 09:49:53'),
(10, '108', '3', 'Vietnamese', '108-22-Palbociclib-Ibrance-Palbace-Medication-Patient-Information-In-Vietnanese.pdf', 0, NULL, '2022-05-07 09:51:43', '2022-05-07 09:51:43'),
(11, '108', '3', 'Bulgarian', '108-3.pdf', 0, NULL, '2022-06-03 10:38:11', '2022-06-03 10:38:11'),
(12, '108', '5', 'Dutch', 'HUF DEED template.docx', 0, NULL, '2022-06-14 14:48:48', '2022-06-14 14:48:48'),
(13, '108', '2', 'Arabic', 'Error 1.pdf', 0, NULL, '2022-06-16 17:59:43', '2022-06-16 17:59:43'),
(14, '114', '1', 'English', '114-1-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-In-English.pdf', 0, NULL, '2022-07-04 05:51:50', '2022-07-04 05:51:50'),
(15, '114', '3', 'Bulgarian', '114-3-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-In-Bulgarian.pdf', 0, NULL, '2022-07-04 05:52:33', '2022-07-04 05:52:33'),
(16, '114', '4', 'Chinese', '114-4-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-In-Chinese.pdf', 0, NULL, '2022-07-04 05:54:33', '2022-07-04 05:54:33'),
(17, '114', '6', 'Filipino', '114-6-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-In-Filipino.pdf', 0, NULL, '2022-07-04 05:54:54', '2022-07-04 05:54:54'),
(18, '114', '7', 'French', '114-7-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-In-French.pdf', 0, NULL, '2022-07-04 05:55:13', '2022-07-04 05:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `1-4-meds-videos`
--

CREATE TABLE `1-4-meds-videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_1_4_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_4_2_video_no` int(11) NOT NULL,
  `c_1_4_3_video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_4_4_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_4_5_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_4_6_video_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_4_7_video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `1-4-meds-videos`
--

INSERT INTO `1-4-meds-videos` (`id`, `c_1_4_1_generic_id_no`, `c_1_4_2_video_no`, `c_1_4_3_video_title`, `c_1_4_4_image`, `c_1_4_5_image_alt_tag`, `c_1_4_6_video_file`, `c_1_4_7_video_url`, `source_url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '108', 2, 'Professor Nick Turner on palbociclib extending breast cancer survival', '108-2.jpg', 'Professor Nick Turner on palbociclib extending breast cancer survival', '114-5.mp4', 'https://www.youtube.com/watch?v=StD5d3Q-B40', 'https://youtu.be/XYylN5kfqWs', 0, NULL, '2022-06-15 06:15:15', '2022-07-19 01:55:40'),
(2, '108', 3, 'How palbociclib helps Christine live her life with secondary breast cancer', '108-1.jpg', 'How palbociclib helps Christine live her life with secondary breast cancer', '114-5.mp4', 'http://911meds.ebslon.com/videos/114-5.mp4', '', 0, NULL, '2022-06-18 07:35:06', '2022-06-23 06:28:14'),
(3, '108', 4, 'Video 4', '1-Celebru-200.jpg', 'Celebru vido', '253-5.mp4', 'http://911meds.ebslon.com/videos/253-5.mp4', '', 0, NULL, '2022-06-23 06:36:35', '2022-07-05 07:14:50'),
(4, '114', 4, 'Panobinostat in myelofibrosis', '114-1b-i-911globalmeds-com-to-buy-brand-ixapana-10-mg-capsule-of-novartis-online.jpg', '114-3-Panobinostat-Farydak-Ixapana-Medication-Patient-Information-video-image', 'Vid-xx-911globalmeds-com-Generic-Dapagliflozin-Saxagliptin-Brand-Qtern-Drug-Price-Information.mp4', 'http://911meds.ebslon.com/videos/Vid-xx-911globalmeds-com-Generic-Dapagliflozin-Saxagliptin-Brand-Qtern-Drug-Price-Information.mp4', '', 0, NULL, '2022-07-04 05:59:33', '2022-07-04 06:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `1-5-meds-seos`
--

CREATE TABLE `1-5-meds-seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_1_5_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_2_meta_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_5_3_meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_5_4_meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_5_5_hyperlink_page_tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_1_5_6_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_7_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_8_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_9_distribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_10_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_11_robots` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_12_revisit_after` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_13_rating_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_14_rating_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_15_other_tags_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_16_other_tags_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_1_5_17_other_tags_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `1-5-meds-seos`
--

INSERT INTO `1-5-meds-seos` (`id`, `c_1_5_1_generic_id_no`, `c_1_5_2_meta_title`, `c_1_5_3_meta_description`, `c_1_5_4_meta_keyword`, `c_1_5_5_hyperlink_page_tags`, `c_1_5_6_canonical`, `c_1_5_7_language`, `c_1_5_8_country`, `c_1_5_9_distribution`, `c_1_5_10_author`, `c_1_5_11_robots`, `c_1_5_12_revisit_after`, `c_1_5_13_rating_value`, `c_1_5_14_rating_count`, `c_1_5_15_other_tags_3`, `c_1_5_16_other_tags_4`, `c_1_5_17_other_tags_5`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '108', 'Palbociclib / Ibrance / Palbace 75 mg / 100 mg / 125 mg Capsules', '*** 911GlobalMeds to buy Brand IBRANCE PALBACE / Generic PALBOCICLIB 75 mg | 100 mg | 125 mg Capsule @ AFFORDABLE LOWEST COST PRICE ( also see Dosage/Doses, Uses, Side Effects & Warnings information ) in Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela,  Vietnam etc.', 'ibrance cost, ibrance medication, palbociclib cost, ibrance generic name, buy palbociclib, buy ibrance, ibrance 125 mg price, palbociclib generic, palbociclib tablet price, ibrance 100 mg price, palbociclib capsules price, buy ibrance online, ibrance side effects, palbociclib side effects, palbociclib cost, ibrance chemo, ibrance pfizer, ibrance medication, ibrance chemotherapy, ibrance generic, ibrance doses, ibrance 125 mg, palbociclib price, ibrance 75 mg, ibrance 100 mg, ibrance medicine, palbociclib generic', 'ibrance cost, ibrance medication, palbociclib cost, ibrance generic name, buy palbociclib, buy ibrance, ibrance 125 mg price, palbociclib generic, palbociclib tablet price, ibrance 100 mg price, palbociclib capsules price, buy ibrance online, ibrance side effects, palbociclib side effects, palbociclib cost, ibrance chemo, ibrance pfizer, ibrance medication, ibrance chemotherapy, ibrance generic, ibrance doses, ibrance 125 mg, palbociclib price, ibrance 75 mg, ibrance 100 mg, ibrance medicine, palbociclib generic', NULL, 'English', 'USA', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '7 days', '90', '634', '100', NULL, NULL, 0, NULL, '2022-04-29 06:01:58', '2022-05-27 09:10:15'),
(2, '109', 'Paliperidone Palmitate / Invega Sustenna 1.5 mg / 3 mg / 6 mg / 9 mg / 50 mg / 75 mg / 100 mg / 150 mg Tablet / PFS / Injection Vial', '*** 911GlobalMeds to buy Brand INVEGA SUSTENNA / Generic PALIPERIDONE PALMITATE ER 1.5 mg | 3 mg | 6 mg | 9 mg | 50 mg | 75 mg | 100 mg | 150 mg Tablet | PFS | Injection Vial @ AFFORDABLE LOWEST COST PRICE ( also see Dosage/Doses, Uses, Side Effects & Warnings information ) in Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela,  Vietnam etc.', 'invega sustenna price, invega sustenna cost, invega injection cost, buy invega, invega sustenna injection site, paliperidone injection cost, invega sustenna generic, invega sustenna 156 mg injection, paliperidone 150mg injection, paliperidone injection price, invega sustenna injection cost, invega sustenna 150 mg price, invega sustenna 150 mg injection, invega trinza generic', 'invega sustenna price, invega sustenna cost, invega injection cost, buy invega, invega sustenna injection site, paliperidone injection cost, invega sustenna generic, invega sustenna 156 mg injection, paliperidone 150mg injection, paliperidone injection price, invega sustenna injection cost, invega sustenna 150 mg price, invega sustenna 150 mg injection, invega trinza generic', NULL, 'English', 'USA', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '7 days', '90', '634', '25', '25', NULL, 0, NULL, '2022-05-02 11:38:53', '2022-05-10 10:36:24'),
(3, '110', 'Palonosetron / Aloxi 0.25 mg / 0.5 mg Injection Vial / Tablet', '*** 911GlobalMeds to buy Brand ALOXI / Generic PALONOSETRON 0.25 mg | 0.5 mg Injection Vial | Tablet @ AFFORDABLE LOWEST COST PRICE ( also see Dosage/Doses, Uses, Side Effects & Warnings information ) in Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela,  Vietnam etc.', 'aloxi generic name, palonosetron brand name, aloxi medication, aloxi injection, palonosetron price, aloxi generic, palonosetron generic, generic aloxi', 'aloxi generic name, palonosetron brand name, aloxi medication, aloxi injection, palonosetron price, aloxi generic, palonosetron generic, generic aloxi', NULL, 'English', 'USA', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '7 days', '90', '698', NULL, NULL, NULL, 0, NULL, '2022-05-02 11:46:32', '2022-05-02 11:46:32'),
(4, '111', 'Pamidronate Disodium / Aredia 15 mg / 30 mg / 60 mg / 90 mg Injection Vial', '*** 911GlobalMeds to buy Brand AREDIA / Generic PAMIDRONATE DISODIUM 15 mg | 30 mg | 60 mg | 90 mg Injection Vial @ AFFORDABLE LOWEST COST PRICE ( also see Dosage/Doses, Uses, Side Effects & Warnings information ) in Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela,  Vietnam etc.', 'aloxi generic name, palonosetron brand name, aloxi medication, aloxi injection, palonosetron price, aloxi generic, palonosetron generic, generic aloxi', 'aloxi generic name, palonosetron brand name, aloxi medication, aloxi injection, palonosetron price, aloxi generic, palonosetron generic, generic aloxi', NULL, 'English', 'USA', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '7 days', '90', '634', NULL, NULL, NULL, 0, NULL, '2022-05-02 11:46:32', '2022-05-02 11:46:32'),
(5, '112', 'Pancreatin / Creon 150 mg / 150 mg / 30 gm / 300 mg / 400 mg Capsule / Minimicrospheres', '*** 911GlobalMeds to buy Brand CREON / Generic PANCREATIN 150 mg | 150 mg | 30 gm | 300 mg | 400 mg Capsule | Minimicrospheres @ AFFORDABLE LOWEST COST PRICE ( also see Dosage/Doses, Uses, Side Effects & Warnings information ) in Australia, Bulgaria, China, Dominican Republic, Estonia, Ethiopia, France, Georgia, Gibraltar, Honduras, Hong Kong, Indonesia, Ireland, Israel, Japan, Jersey, Malaysia, Malta, Morocco, Netherlands, New Zealand, Nigeria, Norway, Philippines, Romania, Saudi Arabia, Singapore, South Korea, Switzerland, Taiwan, Thailand, Turkey, UAE, UK, USA, Venezuela,  Vietnam etc.', 'creon generic, creon medication price, buy pancreatin, buy creon, creon medication generic, creon 10000 buy online, creon 25000 tablet price, pancreatin capsules 150mg, creon 25000 buy online, pancreatin capsules 300mg, creon capsule price, creon generic cost, creon 36000 generic, creon capsule generic', 'aloxi generic name, palonosetron brand name, aloxi medication, aloxi injection, palonosetron price, aloxi generic, palonosetron generic, generic aloxi', NULL, 'English', 'USA', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '7 days', '90', '685', NULL, NULL, NULL, 0, NULL, '2022-05-02 11:46:32', '2022-05-10 10:32:28'),
(9, '114', 'Meta Titles', 'Meta Description', 'Meta Keyword', 'Hyperlink Page Tags', NULL, 'Language', 'Country', 'Distribution', 'Author', 'Robots', '10', '90', '342', NULL, NULL, NULL, 0, NULL, '2022-07-05 07:21:43', '2022-07-16 11:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `2-1-meds-products`
--

CREATE TABLE `2-1-meds-products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_2_1_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_1_2_product_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_2_1_3_short_strength_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_2_1_4_display_at` bigint(20) NOT NULL,
  `c_2_1_5_product_name_h2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_2_1_6_med_use` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `2-1-meds-products`
--

INSERT INTO `2-1-meds-products` (`id`, `c_2_1_1_generic_id_no`, `c_2_1_2_product_no`, `c_2_1_3_short_strength_id`, `c_2_1_4_display_at`, `c_2_1_5_product_name_h2`, `c_2_1_6_med_use`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, '108', '108-2', '100 mg Capsules', 2, 'PALBOCICLIB / IBRANCE / PALBACE 100 MG CAPSULES', 'Generic PALBOCICLIB / Brand IBRANCE 100mg Capsules is used to treat Breast Cancer', 0, NULL, '2022-04-24 23:04:57', '2022-06-03 10:12:59'),
(5, '108', '108-3', '125 mg Capsules', 3, 'PALBOCICLIB / IBRANCE / PALBACE 125 MG CAPSULES', 'Generic PALBOCICLIB / Brand IBRANCE 125 mg Capsules is used to treat Breast Cancer', 0, NULL, '2022-04-24 23:05:56', '2022-06-03 10:13:06'),
(6, '109', '109-1', '1.5 mg Tablets', 1, 'PALIPERIDONE PALMITATE ER / INVEGA SUSTENNA 1.5 MG TABLETS', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 1.5 mg Tablets is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:06:46', '2022-04-24 23:06:46'),
(7, '109', '109-2', '3 mg Tablets', 2, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 3 MG TABLETS', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 3 mg Tablets is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:07:39', '2022-04-24 23:07:39'),
(8, '109', '109-3', '6 mg Tablets', 3, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 6 MG TABLETS', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 6 mg Tablets is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:08:32', '2022-04-24 23:08:32'),
(9, '109', '109-4', '9 mg Tablets', 4, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 9 MG TABLETS', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 9 mg Tablets is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:09:26', '2022-04-24 23:09:26'),
(10, '109', '109-5', '50 mg Pre-Filled Syringe', 5, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 50 MG PRE-FILLED SYRINGE', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 50 mg Pre-Filled Syringe is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:10:22', '2022-04-24 23:10:22'),
(11, '109', '109-6', '75 mg Pre-Filled Syringe', 6, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 75 MG PRE-FILLED SYRINGE', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 75 mg Pre-Filled Syringe is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:11:35', '2022-04-24 23:11:35'),
(12, '109', '109-7', '100 mg Pre-Filled Syringe', 7, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 100 MG PRE-FILLED SYRINGE', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 100 mg Pre-Filled Syringe is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:12:27', '2022-04-24 23:12:27'),
(13, '109', '109-8', '150 mg Pre-Filled Syringe', 8, 'PALIPERIDONE PALMITATE / INVEGA SUSTENNA 150 MG PRE-FILLED SYRINGE', 'Generic PALIPERIDONE PALMITATE / Brand INVEGA 150 mg Pre-Filled Syringe is used to treat Schizophrenia and Schizoaffective disorder', 0, NULL, '2022-04-24 23:13:26', '2022-04-24 23:13:26'),
(18, '108', '108-1', '75 mg Capsules', 4, 'PALBOCICLIB / IBRANCE / PALBACE 75 MG CAPSULES', 'Generic PALBOCICLIB / Brand IBRANCE 50 mg Capsules is used to treat Breast Cancer', 0, NULL, '2022-05-20 11:04:35', '2022-07-19 05:22:44'),
(21, '108', '108-4', '500 mg Capsules', 4, 'PALBOCICLIB / IBRANCE / PALBACE 500 MG CAPSULES', 'Generic PALBOCICLIB / Brand IBRANCE 50 mg Capsules is used to treat Breast Cancer', 0, NULL, '2022-05-27 05:06:30', '2022-05-27 05:06:30'),
(22, '114', '114-1', '10 mg Capsules', 1, 'PANOBINOSTAT / FARYDAK / IXAPANA 10 MG CAPSULES', 'Generic PANOBINOSTAT / Brand FARYDAK 10 mg Capsules is used to treat Blood Cancer / Leukemia', 0, NULL, '2022-07-04 06:07:38', '2022-07-04 06:07:38'),
(23, '114', '114-2', '15 mg Capsules', 2, 'PANOBINOSTAT / FARYDAK / IXAPANA 15 MG CAPSULES', 'Generic PANOBINOSTAT / Brand FARYDAK 15 mg Capsules is used to treat Blood Cancer / Leukemia', 0, NULL, '2022-07-04 06:08:04', '2022-07-04 06:08:04'),
(24, '114', '114-3', '20 mg Capsules', 3, 'PANOBINOSTAT / FARYDAK / IXAPANA 20 MG CAPSULES', 'Generic PANOBINOSTAT / Brand FARYDAK 20 mg Capsules is used to treat Blood Cancer / Leukemia', 0, NULL, '2022-07-04 06:08:24', '2022-07-04 06:08:24'),
(25, '108', '108-5', '750 mg Capsules', 5, 'PALBOCICLIB / IBRANCE / PALBACE 750 MG CAPSULES', 'Generic PALBOCICLIB / Brand IBRANCE 750 mg Capsules is used to treat Breast Cancer', 0, NULL, '2022-07-17 09:55:16', '2022-07-17 09:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `2-2-meds-prices`
--

CREATE TABLE `2-2-meds-prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_2_2_1_generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_2_2_2_product_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_2_2_3_g_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_4_g_available` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NA',
  `c_2_2_5_g_display` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `c_2_2_6_g_na_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_7_g_name_in_h3_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_8_g_manufactured_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_9_g_mfr_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_10_g_drug_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_11_g_shipped_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_12_g_icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_13_g_icon_i_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_med_image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_med_image_alt_tag` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_14_g_full_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_15_g_full_i_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_16_g_pack_1_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_17_g_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_18_g_pack_1_inr_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_19_g_pp_x_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_20_g_pp_x_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_21_g_pp_x_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_22_g_disc_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_23_g_disc_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_24_g_disc_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_25_b_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_26_b_available` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NA',
  `c_2_2_27_b_display` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `c_2_2_28_b_na_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_29_b_name_in_h3_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_30_b_manufactured_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_31_b_mfr_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_32_b_drug_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_33_b_shipped_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_34_b_icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_35_b_icon_i_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branded_med_image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branded_icon_alt_tag` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_36_b_full_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_37_b_full_i_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_38_b_pack_1_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_39_b_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_40_b_pack_1_inr_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_41_b_pp_x_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_42_b_pp_x_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_43_b_pp_x_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_44_b_disc_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_45_b_disc_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_2_46_b_disc_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `2-2-meds-prices`
--

INSERT INTO `2-2-meds-prices` (`id`, `c_2_2_1_generic_id_no`, `c_2_2_2_product_no`, `c_2_2_3_g_sku`, `c_2_2_4_g_available`, `c_2_2_5_g_display`, `c_2_2_6_g_na_message`, `c_2_2_7_g_name_in_h3_tag`, `c_2_2_8_g_manufactured_by`, `c_2_2_9_g_mfr_url`, `c_2_2_10_g_drug_for`, `c_2_2_11_g_shipped_from`, `c_2_2_12_g_icon_image`, `c_2_2_13_g_icon_i_alt_tag`, `generic_med_image`, `generic_med_image_alt_tag`, `c_2_2_14_g_full_image`, `c_2_2_15_g_full_i_alt_tag`, `c_2_2_16_g_pack_1_qty`, `c_2_2_17_g_unit`, `c_2_2_18_g_pack_1_inr_price`, `c_2_2_19_g_pp_x_1`, `c_2_2_20_g_pp_x_2`, `c_2_2_21_g_pp_x_3`, `c_2_2_22_g_disc_1`, `c_2_2_23_g_disc_2`, `c_2_2_24_g_disc_3`, `c_2_2_25_b_sku`, `c_2_2_26_b_available`, `c_2_2_27_b_display`, `c_2_2_28_b_na_message`, `c_2_2_29_b_name_in_h3_tag`, `c_2_2_30_b_manufactured_by`, `c_2_2_31_b_mfr_url`, `c_2_2_32_b_drug_for`, `c_2_2_33_b_shipped_from`, `c_2_2_34_b_icon_image`, `c_2_2_35_b_icon_i_alt_tag`, `branded_med_image`, `branded_icon_alt_tag`, `c_2_2_36_b_full_image`, `c_2_2_37_b_full_i_alt_tag`, `c_2_2_38_b_pack_1_qty`, `c_2_2_39_b_unit`, `c_2_2_40_b_pack_1_inr_price`, `c_2_2_41_b_pp_x_1`, `c_2_2_42_b_pp_x_2`, `c_2_2_43_b_pp_x_3`, `c_2_2_44_b_disc_1`, `c_2_2_45_b_disc_2`, `c_2_2_46_b_disc_3`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '108', '108-2', '108-2G', 'A', 'S', 'out_of_stock', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', 'WHOcGMP Certified', 'https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes', 'Ibrance / Palbace', 'Canada/India/New Zealand', '108-2G-I-Buy-Generic-Palbociclib-100-mg-Capsule-hk-canada-pharmacy-online-mp.jpg', 'G ICON Img Alt Tag', '108-2g-m-911globalmeds-com-to-buy-generic-palbociclib-100-mg-capsule-online.jpg', 'G MEDIUM Img Alt Tag', '108-2G-F-Buy-Generic-Palbociclib-100-mg-Capsule-hk-canada-pharmacy-online-mp.jpg', 'G FULL Img Alt Tag', '21', 'Capsule', '51450', '1', '2', '4', '10', '13', '15', '108-2B', 'NA', 'S', 'coming_soon', 'Palbace 100 mg Capsules of Pfizer ( Brand Drug )', 'Pfizer', 'https://www.pfizer.com/', 'Palbociclib', 'Australia/India/New Zealand', '108-2B-I-Buy-Brand-Ibrance-Palbace-100-mg-Capsule-Pfizer-hk-canada-pharmacy-online-mp.jpg', 'B ICON Img Alt Tag', '108-2b-m-911globalmeds-com-to-buy-brand-palbace-100-mg-capsule-of-pfizer-online.jpg', 'B MEDIUM Img Alt Tag', '108-2B-F-Buy-Brand-Ibrance-Palbace-100-mg-Capsule-Pfizer-hk-canada-pharmacy-online-mp.jpg', 'B FULL Img Alt Tag', '21', 'Capsule', '161700', '1', '2', '4', '10', '12', '15', 0, NULL, '2022-04-29 06:52:39', '2022-07-19 04:51:38'),
(3, '108', '108-3', '108-3G', 'NA', 'S', 'coming_soon', 'Palbociclib 125 mg Capsules ( Generic of Ibrance / Palbace )', 'WHOcGMP Certified', 'https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes', 'Ibrance / Palbace', 'India/Turkey/UK', '1651498399-generic_select_icon.jpg', 'Generic Palbace 125 mg Capsules of Pfizer', '108-3g-m-911globalmeds-com-to-buy-generic-palbociclib-125-mg-capsule-online.jpg', NULL, '1651498399-generic_select_full.jpg', 'Generic Palbociclib 125 mg Capsules', '21', 'Capsule', '100000', '4', '5', '6', '11', '14', '16', '108-3B', 'A', 'S', 'coming_soon', 'Palbace 125 mg Capsules of Pfizer ( Brand Drug )', 'Pfizer', 'https://www.pfizer.com/', 'Palbociclib', 'Australia/India/New Zealand', '1651498399-branded_meds_meds_icon.jpg', 'Brand Palbace 125 mg Capsules of Pfizer', '108-3b-m-911globalmeds-com-to-buy-brand-palbace-125-mg-capsule-of-pfizer-online.jpg', NULL, '1651498399-branded_meds_meds_full.jpg', 'Brand Palbace 125 mg Capsules of Pfizer', '21', 'Capsule', '200000', '2', '6', '8', '11', '13', '16', 0, NULL, '2022-05-02 13:33:19', '2022-07-19 05:15:06'),
(4, '109', '109-1', '109-1G', 'NA', 'H', NULL, 'Paliperidone Palmitate ER 1.5 mg Tablets ( Generic of Invega Sustenna )', 'WHOcGMP Certified', 'https://911globalmeds.com/whocgmp-manufacturing-companies', 'Invega Sustenna', 'Canada/India/UK', '109-1G-911GlobalMeds-com-Generic-Paliperidone-Palmitate-ER-1.5-mg-Tablet-at-lowest-price-online-icon.jpg', 'Generic Paliperidone Palmitate ER 1.5 mg Tablet', NULL, NULL, '109-1G-911GlobalMeds-com-Generic-Paliperidone-Palmitate-ER-1.5-mg-Tablet-at-lowest-price-online-full.jpg', 'Generic Paliperidone Palmitate ER 1.5 mg Tablet', '30', 'Tablet', '10500', '1', '2', '4', '10', '13', '15', '109-1B', 'A', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 13:33:19', '2022-05-11 07:35:25'),
(5, '109', '109-2', '109-2G', 'A', 'S', NULL, 'Paliperidone Palmitate 3 mg Tablets ( Generic of Invega Sustenna )', 'WHOcGMP Certified', 'https://911globalmeds.com/whocgmp-manufacturing-companies', 'Invega Sustenna', 'Singapore/UK/India', '109-2G-I-Buy-Generic-Paliperidone-Palmitate-3-mg-Tablet-hk-canada-pharmacy-online-mp.jpg', 'Generic Paliperidone Palmitate 3 mg Tablet', NULL, NULL, '109-2G-F-Buy-Generic-Paliperidone-Palmitate-3-mg-Tablet-hk-canada-pharmacy-online-mp.jpg', 'Generic Paliperidone Palmitate 3 mg Tablet', '100', 'Tablet', '28000', '1', '2', '4', '10', '13', '15', '109-2B', 'NA', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-03 10:20:22', '2022-05-13 11:34:33'),
(6, '109', '109-3', '109-3G', 'A', 'S', NULL, 'Paliperidone Palmitate 6 mg Tablets ( Generic of Invega Sustenna )', 'WHOcGMP Certified', 'https://911globalmeds.com/whocgmp-manufacturing-companies', 'Invega Sustenna', 'Thailand/India/UK', '109-3G-I-Buy-Generic-Paliperidone-Palmitate-6-mg-Tablet-hk-canada-pharmacy-online-mp.jpg', 'Generic Paliperidone Palmitate 6 mg Tablet', NULL, NULL, '109-3G-F-Buy-Generic-Paliperidone-Palmitate-6-mg-Tablet-hk-canada-pharmacy-online-mp.jpg', 'Generic Paliperidone Palmitate 6 mg Tablet', '100', 'Tablet', '21000', '1', '2', '4', '10', '13', '15', '109-3B', 'A', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-03 10:29:24', '2022-05-13 11:35:42'),
(7, '109', '109-4', '109-4G', 'A', 'H', NULL, 'Paliperidone Palmitate 9 mg Tablets ( Generic of Invega Sustenna )', 'WHOcGMP Certified', 'https://911globalmeds.com/whocgmp-manufacturing-companies', 'Invega Sustenna', 'Canada/India/Thailand', '109-4G-911GlobalMeds-com-Generic-Paliperidone-Palmitate-9-mg-Tablet-at-lowest-price-online-icon.jpg', 'Generic Paliperidone Palmitate 9 mg Tablet', NULL, NULL, '109-4G-911GlobalMeds-com-Generic-Paliperidone-Palmitate-9-mg-Tablet-at-lowest-price-online-full.jpg', 'Generic Paliperidone Palmitate 9 mg Tablet', '100', 'Tablet', '28000', '1', '2', '4', '10', '13', '15', NULL, 'A', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-03 10:35:48', '2022-05-03 10:35:48'),
(12, '108', '108-1', '108-1G', 'NA', 'S', 'coming_soon', 'sdfsdf 50mg', 'WHOcGMP Certified', 'https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes', 'sdfsdf', 'sdfsdf', '', NULL, NULL, NULL, NULL, NULL, '50', 'Capsule', '50000', '1', '2', '4', '10', '13', '15', '108-1B', 'NA', 'S', 'out_of_stock', 'sfsdf', 'sdfdsf', 'sdfsd', 'sdfsdf', 'sdfsdf', '', NULL, NULL, NULL, NULL, NULL, '20', 'tabs', '40000', '1', '2', '4', '10', '12', '13', 0, NULL, '2022-05-27 06:39:02', '2022-07-05 08:59:25'),
(13, '108', '108-4', '108-4G', 'A', 'S', NULL, 'dggdfg', 'WHOcGMP Certified', 'https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes', 'gdfgdfg', 'dfgdfg', '', NULL, NULL, NULL, NULL, NULL, '100', 'Tablet', '1000', '1', '2', '4', '10', '13', '15', '108-4B', 'A', 'S', NULL, 'fsfsdf', 'WHOcGMP Certified', 'https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes', 'sfsdfsf', 'sdfsdf', '', NULL, NULL, NULL, NULL, NULL, '45', 'Capsule', '200000', '1', '2', '4', '10', '12', '13', 0, NULL, '2022-05-27 07:13:55', '2022-05-27 07:13:55'),
(14, '114', '114-1', '114-1G', 'NA', 'H', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '1', '2', '4', '10', '13', '15', '114-1B', 'A', 'S', NULL, 'Ixapana 10 mg Capsules of Novartis ( Brand Drug )', 'Novartis', 'https://www.novartis.com/', 'Panobinostat', 'Australia/India/UK', '', '911 Global Meds to buy Brand Ixapana 10 mg Capsules of Novartis online', NULL, NULL, '', '911 Global Meds to buy Brand Ixapana 10 mg Capsules of Novartis online', '6', 'Capsules', '356999.9964', '1', '2', '4', '10', '12', '13', 0, NULL, '2022-07-04 06:12:44', '2022-07-04 06:12:44'),
(15, '114', '114-2', '114-2G', 'NA', 'H', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '1', '2', '4', '10', '13', '15', '114-2B', 'A', 'S', NULL, 'Ixapana 15 mg Capsules of Novartis ( Brand Drug )', 'Novartis', 'https://www.novartis.com/', 'Panobinostat', 'Singapore/UK/India', '', '911 Global Meds to buy Brand Ixapana 15 mg Capsules of Novartis online', NULL, NULL, '', '911 Global Meds to buy Brand Ixapana 15 mg Capsules of Novartis online', '6', 'Capsules', '356105', '1', '2', '4', '10', '12', '13', 0, NULL, '2022-07-04 06:15:00', '2022-07-04 06:15:00'),
(16, '114', '114-3', '114-3G', 'NA', 'H', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '1', '2', '4', '10', '13', '15', '114-3B', 'A', 'S', NULL, 'Ixapana 20 mg Capsules of Novartis ( Brand Drug )', 'Novartis', 'https://www.novartis.com/', 'Panobinostat', 'Australia/India/UK', '', '911 Global Meds to buy Brand Ixapana 20 mg Capsules of Novartis online', NULL, NULL, '', '911 Global Meds to buy Brand Ixapana 20 mg Capsules of Novartis online', '6', 'Capsules', '363719.9964', '1', '2', '4', '10', '12', '13', 0, NULL, '2022-07-04 06:21:08', '2022-07-04 06:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `2-3-meds-forexes`
--

CREATE TABLE `2-3-meds-forexes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_2_3_1_fx_sign_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_2_fx_rate_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_3_fx_sign_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_4_fx_rate_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_5_fx_sign_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_6_fx_rate_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_7_fx_sign_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_8_fx_rate_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_9_fx_sign_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_10_fx_rate_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_11_fx_sign_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_12_fx_rate_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_13_fx_sign_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_14_fx_rate_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_15_fx_sign_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_16_fx_rate_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_17_fx_sign_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_18_fx_rate_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_19_fx_sign_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_20_fx_rate_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_21_fx_sign_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_22_fx_rate_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_23_fx_sign_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_24_fx_rate_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_25_fx_sign_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_26_fx_rate_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_27_fx_sign_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_2_3_28_fx_rate_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `2-3-meds-forexes`
--

INSERT INTO `2-3-meds-forexes` (`id`, `c_2_3_1_fx_sign_1`, `c_2_3_2_fx_rate_1`, `c_2_3_3_fx_sign_2`, `c_2_3_4_fx_rate_2`, `c_2_3_5_fx_sign_3`, `c_2_3_6_fx_rate_3`, `c_2_3_7_fx_sign_4`, `c_2_3_8_fx_rate_4`, `c_2_3_9_fx_sign_5`, `c_2_3_10_fx_rate_5`, `c_2_3_11_fx_sign_6`, `c_2_3_12_fx_rate_6`, `c_2_3_13_fx_sign_7`, `c_2_3_14_fx_rate_7`, `c_2_3_15_fx_sign_8`, `c_2_3_16_fx_rate_8`, `c_2_3_17_fx_sign_9`, `c_2_3_18_fx_rate_9`, `c_2_3_19_fx_sign_10`, `c_2_3_20_fx_rate_10`, `c_2_3_21_fx_sign_11`, `c_2_3_22_fx_rate_11`, `c_2_3_23_fx_sign_12`, `c_2_3_24_fx_rate_12`, `c_2_3_25_fx_sign_13`, `c_2_3_26_fx_rate_13`, `c_2_3_27_fx_sign_14`, `c_2_3_28_fx_rate_14`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'US$', '75', 'AU$', '1.512', 'CA$', '1.3132497', 'CN¥', '6.67610685', 'EU€', '0.9490971', 'GB£', '0.8002', 'NZ$', '1.5146838', 'SG$', '1.42427355', 'TR₺', '15.4244895', 'RU₽', '89.3022312', 'JP¥', '128.8240716', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2022-06-29 05:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `3-1-home-header`
--

CREATE TABLE `3-1-home-header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_1_1_image_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_1_2_image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_1_3_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_1_4_message_on_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_1_5_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_1_6_url_to_open` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-1-home-header`
--

INSERT INTO `3-1-home-header` (`id`, `c_3_1_1_image_no`, `c_3_1_2_image_name`, `c_3_1_3_image_alt_tag`, `c_3_1_4_message_on_image`, `c_3_1_5_text_color`, `c_3_1_6_url_to_open`, `display`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'banner-1-safe-reputable-online-pharmacy-marketplace.jpg', 'IMAGE', 'SAFE - TRUSTED - AFFORDABLE DRUGS. EARLY HEALTH FOR ALL!', '#1a9fcb', 'https://911globalmeds.com/about-us', 'S', NULL, '2022-04-21 23:26:39', '2022-07-20 01:55:10'),
(2, '2', 'banner-2-international-trusted-online-pharmacy-marketplace.jpg', 'banner 3', 'SAFE - TRUSTED - AFFORDABLE DRUGS. EARLY HEALTH FOR ALL!', '#1ab798', 'SAFE - TRUSTED - AFFORDABLE DRUGS. EARLY HEALTH FOR ALL!', 'S', NULL, '2022-04-21 23:28:30', '2022-07-19 00:57:25'),
(3, '3', 'banner-3-buy-from-reputable-reliable-hk-canada-pharmacy-mp.jpg', 'banner 2', 'SAFE - TRUSTED - AFFORDABLE DRUGS. EARLY HEALTH FOR ALL!', '#000000', 'SAFE - TRUSTED - AFFORDABLE DRUGS. EARLY HEALTH FOR ALL!', 'S', NULL, '2022-04-21 23:29:38', '2022-07-19 00:57:40'),
(4, '4', 'banner-4.jpg', 'banner4', 'Banner Message', '#000', 'http://911meds.ebslon.com/', 'S', '2022-05-09 09:15:47', '2022-05-09 09:15:03', '2022-05-09 09:15:47'),
(5, '4', 'banner-4.jpg', 'banner 4', 'Hello', '#000000', 'http://911globalmeds.com/login.php', 'S', '2022-05-11 18:05:08', '2022-05-11 18:03:36', '2022-05-11 18:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `3-2-main-body`
--

CREATE TABLE `3-2-main-body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_2_1_h1_title_in_green` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_2_2_qa_h2_green_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_2_3_h2_blue_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_2_4_text_below_blue_1` text COLLATE utf8mb4_unicode_ci,
  `c_3_2_5_h2_blue_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_2_6_text_below_blue_2` text COLLATE utf8mb4_unicode_ci,
  `c_3_2_7_h2_blue_line_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_2_8_text_below_blue_3` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-2-main-body`
--

INSERT INTO `3-2-main-body` (`id`, `c_3_2_1_h1_title_in_green`, `c_3_2_2_qa_h2_green_title`, `c_3_2_3_h2_blue_line_1`, `c_3_2_4_text_below_blue_1`, `c_3_2_5_h2_blue_line_2`, `c_3_2_6_text_below_blue_2`, `c_3_2_7_h2_blue_line_3`, `c_3_2_8_text_below_blue_3`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Order Medication from Best Online Pharmacy Marketplace', 'Best, Reputable, Trusted, Legit and Safe Mail Order Canadian & International Online Pharmacy to Order Medication Online', 'Order Medication from Best Online Pharmacy Marketplace Direct from Reputable & Reliable Canadian & Global Pharmacys', '<p>911GlobalMeds is the best Canada &amp; Global Pharmacy Marketplace to buy FDA Approved Drugs &amp; Medications directly from top-class Canada Online Pharmacy and other Legal International Pharmacies of Australia, India, New Zealand, European Union, Switzerland, Singapore, USA, and Turkey. Patients across the world can place an order for any branded medicine or generic drug through our website and get discounts up to 80 percent on hundreds of prescription drugs.</p>\r\n\r\n<p>The reputable Canadian pharmacy and other International online pharmacy on our marketplace provide the best medicine at a lowest express shipping rates and with a timely home delivery in just 3 to 7 working days approx. Our marketplace network allows meds to be sold directly only by a safe &amp; trusted online pharmacy that can deliver you authentic medicines at lowest possible prices.s</p>', 'Best Online Pharmacy to Buy Prescription Drugs / Medication Onlines', '<p>911GlobalMeds marketplace has been operating since the last 10 years as CancerCurePharmacy and is now before you in a new avatar and much expanded medications range. We offer the same excellent online referral prescription drugs shipment service for 100s of affordable prescriptions medicines, for cancer and many other critical and general diseases. We help you get high discounts and lowest prices on international medicines, with the comfort to order them online from your house.s</p>', 'Ordering pills online is Easy and Secure @ 911GlobalMedss', '<p>911GlobalMeds is the best online pharmaceutical marketplace platform. We are not a pharmacy ourself, but provide a marketplace platform for global legal pharmacies to offer and patients from all countries of the world (except USA) to get prescription referral drugs by ordering pills online at a lowest cost. The prescription service at our platform is safe and affordable and you can order medication online within a few minutes. Order drugs online through our platform comfortably and safely, whenever you want and at as lowest cost price medications.s</p>', 0, NULL, NULL, '2022-07-15 10:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `3-3-general-diseases`
--

CREATE TABLE `3-3-general-diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_3_1_disease_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_3_2_general_disease` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_3_3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_3_4_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `si_source_url` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_5_disease_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_3_6_generic_med_1` bigint(20) DEFAULT NULL,
  `c_3_3_7_generic_med_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_8_generic_med_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_9_generic_med_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_10_generic_med_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_11_generic_med_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_12_generic_med_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_13_generic_med_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_14_generic_med_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_15_generic_med_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_16_generic_med_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_17_generic_med_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_18_generic_med_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_19_generic_med_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_20_generic_med_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_21_generic_med_16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_22_generic_med_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_23_generic_med_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_24_generic_med_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_25_generic_med_20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_26_generic_med_21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_27_generic_med_22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_28_generic_med_23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_29_generic_med_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_30_generic_med_25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_31_generic_med_26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_32_generic_med_27` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_33_generic_med_28` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_34_generic_med_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_3_35_generic_med_30` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-3-general-diseases`
--

INSERT INTO `3-3-general-diseases` (`id`, `c_3_3_1_disease_no`, `c_3_3_2_general_disease`, `c_3_3_3_image`, `c_3_3_4_image_alt_tag`, `si_source_url`, `c_3_3_5_disease_information`, `c_3_3_6_generic_med_1`, `c_3_3_7_generic_med_2`, `c_3_3_8_generic_med_3`, `c_3_3_9_generic_med_4`, `c_3_3_10_generic_med_5`, `c_3_3_11_generic_med_6`, `c_3_3_12_generic_med_7`, `c_3_3_13_generic_med_8`, `c_3_3_14_generic_med_9`, `c_3_3_15_generic_med_10`, `c_3_3_16_generic_med_11`, `c_3_3_17_generic_med_12`, `c_3_3_18_generic_med_13`, `c_3_3_19_generic_med_14`, `c_3_3_20_generic_med_15`, `c_3_3_21_generic_med_16`, `c_3_3_22_generic_med_17`, `c_3_3_23_generic_med_18`, `c_3_3_24_generic_med_19`, `c_3_3_25_generic_med_20`, `c_3_3_26_generic_med_21`, `c_3_3_27_generic_med_22`, `c_3_3_28_generic_med_23`, `c_3_3_29_generic_med_24`, `c_3_3_30_generic_med_25`, `c_3_3_31_generic_med_26`, `c_3_3_32_generic_med_27`, `c_3_3_33_generic_med_28`, `c_3_3_34_generic_med_29`, `c_3_3_35_generic_med_30`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DG1', 'Allergy', 'dg1-buy-allergy-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'buy Allergy drugs medications at  online pharmacy MP 911GobalMedscom', 'https://www.genuinedrugs123.com/Default.aspx', '<p>Allergy is the reaction in our body to substances which are normally of no harm such as certain foods, moulds, pollen, latex, animal dander and insect stings. The symptoms of Allergy vary from mild reactions such as itchiness, hives or rashes, red &amp; watery eyes, running nose to extremes as anaphylaxis which is a life-threatening allergic reaction. Allergy treatments are generally administered as decongestants, antihistamines, asthma medicines, nasal steroids and even immunotherapy. Some Allergy medications are :</p>', 112, '109', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 00:58:01', '2022-07-20 03:08:22'),
(2, 'DG2', 'Alzheimer\'s', 'dg2-buy-alzheimers-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'buy Alzheimer\'s drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Alzheimer&#39;s Disease &ndash; Treatment : https://www.nia.nih.gov/health/how-alzheimers-disease-treated Alzheimer&#39;s is a disease which progresses with age. In Alzheimer&#39;s disease, there is a degeneration of the brain cell connections and the cells themselves start to die thereby destroying memory and mental functioning. Symptoms of Alzheimer&#39;s disease are confusion and memory loss. Alzheimer&#39;s disease does not have a cure, but symptoms can temporarily improve and the disease progression can be slowed down by medications. Some Alzheimer&#39;s disease medications are :</p>', 109, '108', '112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:01:03', '2022-05-13 08:01:13'),
(3, 'DG3', 'Antibiotics', '1651300466-square_image.jpg', 'buy Anti-Bacterial drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Antibiotics - Treatment : https://medlineplus.gov/antibiotics.html Antibiotics are medications that fight bacterial infections by either killing the bacteria or making it difficult for the bacteria to grow and multiply. Bacteria are germs which live in the environment and all over the inside and outside of our bodies. Some Antibiotic medications are :</p>', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:04:26', '2022-04-30 01:04:26'),
(4, 'DG4', 'Anticoagulants', '1651300546-square_image.jpg', 'buy Anticoagulant drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Anticoagulants - Treatment : https://www.uofmhealth.org/conditions-treatments/anticoagulants Anticoagulants are medications prescribed for the prevention of blood clots. Patients who are at a high risk of clots formation are given anticoagulants to reduce the probability of suffering from heart attacks and strokes. Anticoagulant drugs are of 4 categories such as direct thrombin inhibitors, heparins, factor Xa inhibitors and indandiones &amp; coumarins. Some Anticoagulant medications are :</p>', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:05:46', '2022-04-30 01:05:46'),
(5, 'DG5', 'Anti-Fungals', '1651504880-square_image.jpg', 'buy Anti-Fungal drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Anti-Fungals - Treatment : https://www.nhs.uk/conditions/antifungal-medicines/ Anti-fungal medicines are pharmaceutical fungistatics or fungicides used for the treatment and prevention of mycosis such as ringworm, candidiasis, athlete&#39;s foot, cryptococcal meningitis infections etc. Antifungal drugs target only the fungal cell wall &amp; membrane to fight a fungal infection and do not cause any damage to the other human body cells. Some Anti-Fungal medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:21:20', '2022-05-02 15:21:20'),
(6, 'DG6', 'Anti-Virals', '1651505056-square_image.jpg', 'buy Anti-Viral drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Anti-Virals - Treatment : https://www.physio-pedia.com/Antiviral_Drugs Antiviral medications are prescribed for the treatment of viral infections. Most of the antiviral drugs are targeted for specific viruses, whereas there are broad-spectrum antivirals also which provide treatment from a much wider viruses range. Contrary to antibiotics, the role of antiviral medications is not the destruction of the targeted pathogens but the inhibition of their development. Some Anti-Viral medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:24:16', '2022-05-02 15:24:16'),
(7, 'DG7', 'Arthritis', '1651505137-square_image.jpg', 'buy Arthritis drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Arthritis - Treatment : https://www.hopkinsmedicine.org/health/conditions-and-diseases/arthritis Arthritis is the swelling, tenderness or inflammation in the joints. Rheumatoid Arthritis and Osteoarthritis are two types of arthritis which are most common. The treatment options for arthritis are physical rest, hot &amp; cold compressions, physical &amp; occupational therapy, exercise, protection of joints, medications and sometimes even surgery for the reduction of symptoms, correct damage to the joints and improve life quality. Some Arthritis medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:25:37', '2022-05-02 15:25:37'),
(8, 'DG8', 'Birth Control Pills', '1651505385-square_image.jpg', 'buy Birth Control drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Birth Control Pills &ndash; Treatment : https://www.healthline.com/health/birth-control-pills Birth control pills are oral contraceptives containing small amounts of hormones which stop the release of an egg from the ovary (ovulation) and thereby prevent pregnancy. Birth control drugs generally come in a 28-day cycle pack, with a pill meant to be taken each day preferably at same times. The hormone levels are kept elevated due to timely birth control medications with less chances of getting pregnant. Some Birth Control medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:29:45', '2022-05-02 15:29:45'),
(9, 'DG9', 'Coronavirus - COVID-19', '1651505544-square_image.jpg', 'buy COVID-19 drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Coronavirus COVID-19 &ndash; Treatment : https://www.un.org/en/coronavirus Coronavirus / COVID-19 refers to the human infection caused by the new coronavirus strain SARS-CoV-2. While symptoms of many human coronavirus infections are mild as fever, cough and fatigue, COVID-19 infection symptoms can be serious, leading to pneumonia and in some cases death. Some Coronavirus COVID-19 medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:32:24', '2022-05-02 15:32:24'),
(10, 'DG10', 'Depression', '1651505610-square_image.jpg', 'buy Depression drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Depression &ndash; Treatment : https://www.nimh.nih.gov/health/topics/depression Depression is a mood disorder that causes a persistent feeling of sadness and loss of interest. Also called &lsquo;major depressive disorder&rsquo; or &lsquo;clinical depression&rsquo;, Depression affects how one feels, thinks and behaves and can lead to a variety of emotional and physical problems. Although Depression may require long-term treatment, most people feel better with medication, psychotherapy or both. Some Depression medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 15:33:30', '2022-05-02 15:33:30'),
(11, 'DG11', 'Diabetes', '1651507730-square_image.jpg', 'buy Diabetes drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Diabetes &ndash; Treatment : https://www.cdc.gov/diabetes/basics/diabetes.html Diabetes is a group of diseases that cause high blood glucose i.e. high sugar levels in the blood. Although both are chronic conditions, in Type 2 diabetes the body processes excess blood sugar (glucose) whereas in Type 1 diabetes the pancreas produce little or no insulin. Prediabetes is also a condition in which blood sugar is high. Some Diabetes medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:08:50', '2022-05-02 16:08:50'),
(12, 'DG12', 'Heart Care', '1651507839-square_image.jpg', 'buy Heart Care drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Heart Care - Treatment : https://www.heart.org/en/health-topics/heart-attack/treatment-of-a-heart-attack/cardiac-medications Heart care mediations range from Warfarin, Aspirin &amp; Clopidogrel to prevent blood clots, Statins to lower the LDL cholesterol and Beta-blockers to treat heart failure &amp; heart attack and also to lower blood pressure. Heart disease conditions and the required medications differ substantially from patient to patient and a person may need multiple medications at the same time. Some Heart Care medications are:</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:10:39', '2022-05-02 16:10:39'),
(13, 'DG13', 'Hepatitis', '1651507916-square_image.jpg', 'buy Hepatitis drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Hepatitis - Treatment : https://medlineplus.gov/hepatitis.html Hepatitis is a disease condition caused by the inflammation of the liver, which is very vital organ to fight infections, filter the blood and also to process nutrients from the food we take. High alcoholism, toxins exposure, certain medications and medical conditions cause the common types of Hepatitis as Hepatitis B, Hepatitis C, Autoimmune hepatitis, Hepatitis A, Hepatitis E etc. Some Hepatitis medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:11:56', '2022-05-02 16:11:56'),
(14, 'DG14', 'HIV/AIDS', '1651508185-square_image.jpg', 'buy HIV/AIDS drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About HIV/AIDS &ndash; Treatment : https://www.cdc.gov/hiv/basics/whatishiv.html HIV causes AIDS and interferes with the body&#39;s ability to fight infections. The virus can be transmitted through contact with vaginal fluids, semen or infected blood. HIV infection shows flu-like symptoms such as fatigue, sore throat and fever. HIV is usually asymptomatic until it progresses to AIDS. AIDS symptoms include recurrent infections, fatigue, night sweats or fever and weight loss. Some HIV/AIDS medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:16:25', '2022-05-02 16:16:25'),
(15, 'DG15', 'Immunosuppressants', '1651508251-square_image.jpg', 'buy Immunosuppressants drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Immunosuppressants - Treatment : https://www.kidney.org/atoz/content/immuno Immunosuppressant medications, also called anti-rejection drugs, are prescribed to reduce the ability of our body&rsquo;s immune system to reject a transplanted organ. Immunosuppressants drugs are of 2 types viz. Induction drugs which are used at the operating time of a transplant as a powerful antirejection drug and Maintenance drugs which are used long term for antirejection after transplant. Some Immunosuppressant medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:17:31', '2022-05-02 16:17:31'),
(16, 'DG16', 'Men\'s Sexual Health', '1651508313-square_image.jpg', 'buy Men\'s Sexual Health drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Men&#39;s Sexual Health &ndash; Treatment : https://medlineplus.gov/sexualproblemsinmen.html Sexual Health problems are faced by many men as their age progresses and the main causes are emotional problems or stress, medicine effects and illnesses. Men&rsquo;s Sexual Health problems can include low testosterone, ejaculation problems, lower sexual interest, erectile dysfunction. Some Men&#39;s Sexual Health medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:18:33', '2022-05-02 16:18:33'),
(17, 'DG17', 'Migraine', '1651508391-square_image.jpg', 'buy Migraine drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Migraine &ndash; Treatment : https://www.nhs.uk/conditions/migraine/ Migraine is generally a severe headache as a throbbing in specific head areas, which increases or decreases in intensity. Warning symptoms which precede migraine headaches are nausea and sound &amp; light sensitivity. Factors which cause migraine are wrong exercises, stress, specific foods &amp; drinks and hormonal changes. Some Migraine medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:19:51', '2022-05-02 16:19:51'),
(18, 'DG18', 'Multiple Sclerosis', '1651508466-square_image.jpg', 'buy Multiple Sclerosis drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Multiple Sclerosis &ndash; Treatment : https://www.nhs.uk/conditions/multiple-sclerosis/ Multiple Sclerosis is a disease wherein the nerve&rsquo;s protective covering is damaged by the immune system and this causes a disruption in how the brain and the body communicate for bodily actions. Multiple sclerosis may show as symptoms like impaired coordination, fatigue, pain and even vision loss. The duration, severity and symptoms of Multiple sclerosis differ from individual to individual. Some Multiple Sclerosis medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:21:06', '2022-05-02 16:21:06'),
(19, 'DG19', 'Parkinson\'s Disease', '1651508526-square_image.jpg', 'buy Parkinson\'s Disease drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Parkinson&#39;s Disease - Treatment : https://www.parkinson.org/understanding-parkinsons/what-is-parkinsons Parkinson&#39;s Disease is a CNS (Central Nervous System) disorder which affects bodily movements, often causing tremors. Parkinson&#39;s symptoms arise when the dopamine levels in the brain drop due to the nerve cells getting damaged. Tremor in the hands, loss of balance, stiffness and slow movement are some symptoms which may indicate the start of Parkinson&#39;s disease. Some Parkinson&#39;s Disease medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:22:06', '2022-05-02 16:22:06'),
(20, 'DG20', 'Respiratory Disease', '1651508587-square_image.jpg', 'buy Respiratory Disease drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Respiratory Disease - Treatment : https://www.britannica.com/science/respiratory-disease Respiratory Diseases are diseases which affect lungs and the respiratory system. Respiratory diseases may be caused by smoking tobacco, by infection, or by forms of air pollution leading to the breathing in of asbestos, radon or even tobacco smoke. Respiratory diseases are also called pulmonary disease or lung disorder and include COPD (chronic obstructive pulmonary disease), asthma, pneumonia, pulmonary fibrosis, and even lung cancer. Some Respiratory Disease medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:23:07', '2022-05-02 16:23:07'),
(21, 'DG21', 'Schizophrenia', '1651508655-square_image.jpg', 'buy Schizophrenia  drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Schizophrenia &ndash; Treatment : https://www.nimh.nih.gov/health/topics/schizophrenia Schizophrenia is a mental disorder disease in which reality is interpreted abnormally by the diseased person. Schizophrenia can be disabling as its effects vary as extremely disordered thinking, delusions, hallucinations and behavioural defects that impairs daily functioning. Lifelong treatment is required by patients suffering with schizophrenia. Some Schizophrenia medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:24:15', '2022-05-02 16:24:15'),
(22, 'DG22', 'Epilepsy Seizures', '1651508710-square_image.jpg', 'buy Epilepsy Seizures drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Epilepsy / Seizures &ndash; Treatment : https://www.nhs.uk/conditions/epilepsy/ Seizures happen when our brain&rsquo;s nerve cell activity gets irregular and disturbed. When seizures become chronic or recurrent the disease condition is termed as Epilepsy. A person undergoing a Seizure may lose consciousness and sensations and display abnormal symptoms &amp; behaviour. Epilepsy / Seizures may be the effect of a stroke or a trauma or brain injury or a genetic disorder. Some Epilepsy / Seizures medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:25:10', '2022-05-02 16:25:10'),
(23, 'DG23', 'Skin Diseases', '1651508779-square_image.jpg', 'buy Skin Diseases drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Skin Diseases - Treatment : https://www.niams.nih.gov/health-topics/skin-diseases Skin Diseases are conditions affecting our skin by causing inflammation, rashes, itchiness etc skin changes. Some of the skin disease conditions may be caused by genetic factors whereas others may be caused by lifestyle factors. Some of the most common skin diseases include Acne, eczema, Psoriasis, Rosacea, Vitiligo and even Skin cancer. Some Skin Diseases medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:26:19', '2022-05-02 16:26:19'),
(24, 'DG24', 'Other Diseases', '1651508833-square_image.jpg', 'buy Other Diseases drugs medications at  online pharmacy MP 911GobalMedscom', NULL, '<p>About Other Diseases &ndash; Treatment : https://www.cdc.gov/diseasesconditions/index.html Disease are abnormal conditions negatively affecting the function or structure of an organism, even without cause of any external injury. Diseases are referred to medical conditions displaying specific symptoms and signs of abnormality related to a healthy person. Some general disease medications not mentioned above are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:27:13', '2022-05-02 16:27:13'),
(25, 'de-1', 'Demo disease', 'dc1-buy-bladder-cancer-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'demo disease', NULL, '<p>demo disease</p>', 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 05:28:23', '2022-05-10 06:36:59', '2022-05-11 05:28:23'),
(26, '14', 'Sardird', 'dc8-buy-chemotherapy-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'sardird', NULL, '<p>sardird</p>', 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 05:28:57', '2022-05-10 06:45:49', '2022-05-11 05:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `3-4-critical-diseases`
--

CREATE TABLE `3-4-critical-diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_4_1_disease_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_4_2_critical_disease` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_4_3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_4_4_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_4_5_disease_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `si_source_url` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_6_generic_med_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_7_generic_med_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_8_generic_med_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_9_generic_med_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_10_generic_med_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_11_generic_med_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_12_generic_med_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_13_generic_med_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_14_generic_med_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_15_generic_med_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_16_generic_med_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_17_generic_med_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_18_generic_med_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_19_generic_med_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_20_generic_med_15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_21_generic_med_16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_22_generic_med_17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_23_generic_med_18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_24_generic_med_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_25_generic_med_20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_26_generic_med_21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_27_generic_med_22` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_28_generic_med_23` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_29_generic_med_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_30_generic_med_25` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_31_generic_med_26` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_32_generic_med_27` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_33_generic_med_28` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_34_generic_med_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_4_35_generic_med_30` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-4-critical-diseases`
--

INSERT INTO `3-4-critical-diseases` (`id`, `c_3_4_1_disease_no`, `c_3_4_2_critical_disease`, `c_3_4_3_image`, `c_3_4_4_image_alt_tag`, `c_3_4_5_disease_information`, `si_source_url`, `c_3_4_6_generic_med_1`, `c_3_4_7_generic_med_2`, `c_3_4_8_generic_med_3`, `c_3_4_9_generic_med_4`, `c_3_4_10_generic_med_5`, `c_3_4_11_generic_med_6`, `c_3_4_12_generic_med_7`, `c_3_4_13_generic_med_8`, `c_3_4_14_generic_med_9`, `c_3_4_15_generic_med_10`, `c_3_4_16_generic_med_11`, `c_3_4_17_generic_med_12`, `c_3_4_18_generic_med_13`, `c_3_4_19_generic_med_14`, `c_3_4_20_generic_med_15`, `c_3_4_21_generic_med_16`, `c_3_4_22_generic_med_17`, `c_3_4_23_generic_med_18`, `c_3_4_24_generic_med_19`, `c_3_4_25_generic_med_20`, `c_3_4_26_generic_med_21`, `c_3_4_27_generic_med_22`, `c_3_4_28_generic_med_23`, `c_3_4_29_generic_med_24`, `c_3_4_30_generic_med_25`, `c_3_4_31_generic_med_26`, `c_3_4_32_generic_med_27`, `c_3_4_33_generic_med_28`, `c_3_4_34_generic_med_29`, `c_3_4_35_generic_med_30`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DC1', 'Bladder Cancer', 'dc1-buy-bladder-cancer-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'Buy Bladder Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Bladder Cancer - Treatment : https://www.cancer.gov/types/bladder/patient/bladder-treatment-pdq Bladder Cancer appears in the organ responsible for holding urine, termed as tissues of the bladder. Patients may notice blood in their urine but without any pain at the time of urinating. Other symptoms that might point to bladder cancer are feeling to pass urine frequently &amp; urgently, fatigue, loss of weight, and tenderness of bones etc. Some Bladder Cancer medications are :</p>', 'https://1000meds.com/how-to-order-faqs.php', '108', '109', '110', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:09:43', '2022-07-20 02:05:00'),
(2, 'DC2', 'Blood Cancer / Leukaemia', 'dc2-buy-blood-cancer-leukaemia-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'Buy Blood Cancer / Leukaemia Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Blood Cancer / Leukaemia - Treatment : https://www.cancer.gov/types/leukemia Blood cancer is a kind of malignancy which has an effect on the bone marrow, blood, or lymphatic system. In a case of blood cancer, the process of production of the blood gets interrupted because of the expansion of an abnormal variety of blood cells causing kinds of blood cancer as Leukemia, Myeloma, and Lymphoma. Some Blood Cancer / Leukaemia medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:11:18', '2022-05-13 08:02:27'),
(3, 'DC3', 'Bone Cancer', '1651300966-critical_square_image.jpg', 'Buy Bone Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', 'About Bone Cancer (Osteosarcoma) - Treatment :\r\nhttps://www.cancer.gov/types/bone/patient/osteosarcoma-treatment-pdq\r\nBone Cancer happens from the formation of an abnormal mass of tissue or a tumor in a bone, which may be malignant by growing insistently and spreading to surrounding body parts. A malignant tumor is frequently termed as cancerous.  Bone cancer is a rare phenomenon. Some Bone Cancer medications are :', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:12:46', '2022-04-30 01:12:46'),
(4, 'DC4', 'Bone Marrow Cancer', '1651301178-critical_square_image.jpg', 'Buy Bone Marrow Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', 'About Bone Marrow (Multiple Myeloma Cancer) - Treatment :\r\nhttps://www.nhs.uk/conditions/multiple-myeloma/\r\nCancer of the Bone marrow occurs when cells that are present in the marrow start to grow abnormally or at an increased speed. Cancer that begins in the bone marrow is known as bone marrow cancer or blood cancer, not bone cancer. Some Bone Marrow (Multiple Myeloma Cancer)  medications are :', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-04-30 01:16:18', '2022-04-30 01:16:18'),
(5, 'DC5', 'Brain Tumor', '1651510300-critical_square_image.jpg', 'Buy Brain Tumor Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Brain Tumor - Treatment : https://www.cancer.gov/types/brain Brain Tumour is a gathering or a mass of abnormal cells in our brain. Brain tumors can either be malignant (cancerous) or benign (noncancerous). When the growth of the benign or malignant tumors takes place, a pressure can be caused by them inside your skull to enlarge. This can result in damaging of the brain which can be deadly. Some Brain Tumor medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:51:40', '2022-05-02 16:51:40'),
(6, 'DC6', 'Breast Cancer', '1651510376-critical_square_image.jpg', 'Buy Breast Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Breast Cancer - Treatment : https://www.cancer.gov/types/breast/patient/breast-treatment-pdq Breast cancer gets formed either in the breast&rsquo;s ducts or in the lobules. The cancer may also appear in the fibrous connective tissue or the fatty tissue present inside your breast. The stage of breast cancer, to what extent it has attacked and how large the tumor has expanded determine the type of treatment needed. Some Breast Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:52:56', '2022-05-02 16:52:56'),
(7, 'DC7', 'Cervical Cancer', '1651510588-critical_square_image.jpg', 'Buy Cervical Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Cervical Cancer - Treatment : https://www.cancer.gov/types/cervical/patient/cervical-treatment-pdq Cervical Cancer generally starts in the cells that are present on the surface of the women&rsquo;s cervix - the hollow cylinder that links the lower part of uterus to the vagina. Cervical Cancer symptoms are abnormal bleeding, especially in between periods, post sexual activity, or post menopause, pain, urge to urinate more frequently, pain while urinating etc. Some Cervical Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:56:28', '2022-05-02 16:56:28'),
(8, 'DC8', 'Chemotherapy', '1651510645-critical_square_image.jpg', 'Buy Chemotherapy Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Chemotherapy - Treatment : https://www.cancer.gov/about-cancer/treatment/types/chemotherapy Chemotherapy is often used along with surgery, hormone or radiation therapy, depending upon the stage of cancer and its type, patient&rsquo;s health condition, the treatments of cancer taken in the past, the site of the cancerous cells and also the patient&rsquo;s personal choice of treatment. Chemotherapy is a systemic treatment which means that the whole body is affected by this treatment. Some Chemotherapy medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:57:25', '2022-05-02 16:57:25'),
(9, 'DC9', 'Colon & Rectal cancer', '1651510703-critical_square_image.jpg', 'Buy Colon & Rectal Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Colon Cancer &amp; Rectal Cancer - Treatment : https://www.cancer.gov/types/colorectal/patient/colon-treatment-pdq and https://www.cancer.gov/types/colorectal/patient/rectal-treatment-pdq Colorectal Cancer begins in the large intestine (colon) or the end area of the colon called rectum, both being the body organs situated in the lower part of our digestive system. Some symptoms that may be experienced at the initial stage are constipation, changes in the colour of the stool, pain in the abdominal area, extreme gas, bloody stools, bleeding from the rectum, diarrhoea, changes in the shape of the stool, like narrowed stool, cramps in the abdominal area etc. Some Colon Cancer &amp; Rectal Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:58:23', '2022-05-02 16:58:23'),
(10, 'DC10', 'Endometrial Cancer', '1651510762-critical_square_image.jpg', 'Buy Endometrial Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Endometrial Cancer - Treatment : https://www.cancer.gov/types/uterine/patient/endometrial-treatment-pdq Endometrial cancer occurs in the endometrium area which is the inner lining of the uterus. Endometrial Cancer common symptoms are abnormal bleeding from the vagina, alteration in the time-span of menstrual periods, bleeding from the vagina during menstrual periods or post menopause etc. Some Endometrial Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 16:59:22', '2022-05-02 16:59:22'),
(11, 'DC11', 'Esophageal Cancer', '1651510822-critical_square_image.jpg', 'Buy Esophageal Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Esophageal Cancer - Treatment : https://www.cancer.gov/types/esophageal/patient/esophageal-treatment-pdq Esophageal cancer forms as a malignant tumor in the lining of the esophagus - the hollow muscular tube that is responsible for transferring food from the throat to the stomach. As the tumor expands, the deep tissues and muscle of the esophagus can get affected. A tumor can come out anywhere along the extent of the esophagus, including the meeting point of the esophagus and the stomach. Some Esophageal Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:00:22', '2022-05-02 17:00:22'),
(12, 'DC12', 'Gallbladder Cancer', '1651510878-critical_square_image.jpg', 'Buy Gallbladder Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Gallbladder Cancer - Treatment : https://www.cancer.gov/types/gallbladder/patient/gallbladder-treatment-pdq Gallbladder cancer occurs very rarely and the symptoms are detected not before the disease has already spread to the organs and lymph nodes that are present near the gallbladder, a small organ below the liver. The symptoms of gallbladder cancer are fever, itchiness, bloating and abdominal pain. The treatments options are radiation, chemotherapy and surgery. Some Gallbladder Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:01:18', '2022-05-02 17:01:18'),
(13, 'DC13', 'Head & Neck Cancer', '1651510942-critical_square_image.jpg', 'Buy Head & Neck Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Head &amp; Neck Cancer - Treatment : https://www.cancer.gov/types/head-and-neck Head &amp; Neck Cancer is a common term explaining malignant tumours formation in different areas in and around the mouth, sinuses, nose, larynx and the throat. In the &lsquo;Local treatment&rsquo; option, radiation and surgery is used to treat the specific area of the cancer without affecting the rest of the body. Under &lsquo;Systematic treatment&rsquo;, certain Chemotherapy and target therapy medicines go throughout the body reaching the cancer cells at any place. Some Head &amp; Neck Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:02:22', '2022-05-02 17:02:22'),
(14, 'DC14', 'Kidney Cancer', '1651511002-critical_square_image.jpg', 'Buy Kidney Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Kidney Cancer - Treatment : https://www.cancer.gov/types/kidney/patient/kidney-treatment-pdq Kidney cancer forms in the kidneys which are two small fist-sized and bean-shaped organs situated behind our abdominal organs, one each on either side of the spine. Renal Cell Carcinoma is a common form of kidney cancer in adults and can be cured if the diagnosis and treatment is done when the cancer is limited in the kidney location and has not spread to the tissues surrounding it. Some Kidney Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:03:22', '2022-05-02 17:03:22'),
(15, 'DC15', 'Liver Cancer', '1651511065-critical_square_image.jpg', 'Buy Liver Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Liver Cancer - Treatment : https://www.cancer.gov/types/liver/patient/adult-liver-treatment-pdq Liver Cancer occurs in the cells of the liver, which is a big football size body organ located in the upper right-side area of our belly. The symptoms of liver cancer symptoms may occur only in later stage as yellowed skin, vomiting, belly pain and weight loss. The treatments options can vary from radiations in some cases to chemotherapy, transplant and removal of part of the liver. Some Liver Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:04:25', '2022-05-02 17:04:25'),
(16, 'DC16', 'Lung Cancer', '1651511120-critical_square_image.jpg', 'Buy Lung Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Lung Cancer - Treatment : https://www.cancer.gov/types/lung/patient/non-small-cell-lung-treatment-pdq Lung cancer occurs, most commonly in smokers, in the lungs. Its causes are obvious as smoking and exposure to second-hand smoke and certain toxins, and also family history. The common symptoms are cough with splinters of blood, wheezing, chest pain and abnormal loss in weight. The treatments of Lung Cancer are immunotherapy, targeted drug therapy, radiation therapy, chemotherapy and even surgery in extreme cases. Some Lung Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:05:20', '2022-05-02 17:05:20'),
(17, 'DC17', 'Myelodysplastic syndrome', '1651511175-critical_square_image.jpg', 'Buy Myelodysplastic Syndrome Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Myelodysplastic syndrome - Treatment : https://www.cancer.gov/types/myeloproliferative/patient/myelodysplastic-treatment-pdq Myelodysplastic syndromes are disorders occurring from a disruption in the production of blood cells wherein the blood cells get poorly formed or don&#39;t perform properly. These group of disorders result when things malfunction in the bone marrow, with a progression even into leukemia. Symptoms may show as paleness, fatigue, easy bruising and shortness of breath. The disease can be managed by medications, transfusions and even bone marrow transplants. Some Myelodysplastic syndrome medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:06:15', '2022-05-02 17:06:15'),
(18, 'DC18', 'Neuroblastoma', '1651511233-critical_square_image.jpg', 'Buy Neuroblastoma Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Neuroblastoma - Treatment : https://www.cancer.gov/types/neuroblastoma/patient/neuroblastoma-treatment-pdq Neuroblastoma is a cancer which commonly occurs in the adrenal glands, which are small glands on the top-side of our kidneys, and happens when the growth of neuroblasts (immature nerve tissues) cells becomes abnormal and forms a tumour. The most commonly affected are children of ages five or even younger. The symptoms may show as a fever, fatigue and loss of appetite and the treatment may require surgery and chemotherapy medications. Some Neuroblastoma medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:07:13', '2022-05-02 17:07:13'),
(19, 'DC19', 'Oral Cancer', '1651511296-critical_square_image.jpg', 'Buy Oral Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Oral Cancer - Treatment : https://www.cancer.gov/types/head-and-neck/patient/adult/lip-mouth-treatment-pdq Oral Cancers are cancer conditions that may develop in any part of the mouth. Human Papillomavirus (HPV) infection causes oral cancers and other factors are heavy alcohol use and tobacco use. The symptoms can show as a red or white patch or a lump in the mouth or a sore throat that doesn&#39;t heal. Treatment can vary from surgery and radiation therapy and also chemotherapy. Some Oral Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:08:16', '2022-05-02 17:08:16'),
(20, 'DC20', 'Ovarian Cancer', '1651511691-critical_square_image.jpg', 'Buy Ovarian Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Ovarian Cancer - Treatment : https://www.cancer.gov/types/ovarian/patient/ovarian-epithelial-treatment-pdq Ovarian Cancer begins in the ovaries which are female organs that produce eggs. Ovarian Cancer does not show any early-stage symptoms and can remain undetected till it has already spread to the pelvis and belly. Later stages may show some general symptoms as weight loss and loss of appetite. Ovarian Cancer treatment options are surgery and chemotherapy. Some Ovarian Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:14:51', '2022-05-02 17:14:51'),
(21, 'DC21', 'Pancreatic Cancer', '1651511821-critical_square_image.jpg', 'Buy Pancreatic Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Pancreatic Cancer - Treatment : https://www.cancer.gov/types/pancreatic/patient/pancreatic-treatment-pdq Pancreatic Cancer begins in the pancreas, the organ behind the stomach&rsquo;s lower part, having the function to secrete digestion aiding enzymes and hormones regulating sugar &amp; metabolism. Pancreatic cancer has a poor prognosis, spreads rapidly and has a late detection possibility as there are no early-stage symptoms. Later stages may show as weight loss and loss of appetite. Pancreatic Cancer treatment options are to remove the pancreas by surgery or to use chemotherapy and radiation. Some Pancreatic Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:17:01', '2022-05-02 17:17:01'),
(22, 'DC22', 'Penile Cancer', '1651511877-critical_square_image.jpg', 'Buy Penile Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Penile Cancer - Treatment : https://www.cancer.gov/types/penile/patient/penile-treatment-pdq Penile Cancer is a cancer cells formation in the penis tissues. Human papillomavirus (HPV) infection is a major risk for penile cancer and HPV vaccine &amp; Condom use can prevent the infection. Penile cancer symptoms may show as a blister on the shaft, head or foreskin of the penis which may later have a wart-like growth discharging foul-smelling liquid or blood. The common treatment option is surgery or to use chemotherapy and radiation. Some Penile Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:17:57', '2022-05-02 17:17:57'),
(23, 'DC23', 'Prostate Cancer', '1651511937-critical_square_image.jpg', 'Buy Prostate Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', 'About Prostate Cancer - Treatment :\r\nhttps://www.cancer.gov/types/prostate/patient/prostate-treatment-pdq\r\nProstate Cancer is a cancer which forms in a man\'s prostate. Prostate Cancer symptoms show as difficulty in urination, but at times no symptoms may show. Some prostate cancer conditions have a very slow growth requiring periodic monitoring. Prostate cancers which have aggressive growth require chemotherapy, radiation, hormone therapy and even surgery. Some Prostate Cancer medications are :', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:18:57', '2022-05-02 17:18:57'),
(24, 'DC24', 'Skin Cancer / Melanoma', '1651511993-critical_square_image.jpg', 'Buy Skin Cancer / Melanoma Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Skin Cancer - Treatment : https://www.cancer.gov/types/skin/patient/skin-treatment-pdq Skin cancer is often caused by sun-exposure and occurs as mutations in the skin cells DNA, causing an out-of-control cells growth as a cancer cells mass. Skin Cancers are of 3 types as melanoma, squamous cell carcinoma and basal cell carcinoma. Symptoms of skin cancer often include a lump or growth on skin. Skin Cancer treatment options may require radiation, chemotherapy, and even surgery. Some Skin Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:19:53', '2022-05-02 17:19:53'),
(25, 'DC25', 'Soft-tissue Sarcoma', '1651512045-critical_square_image.jpg', 'Buy Soft-Tissue Sarcoma Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Soft-tissue Sarcoma - Treatment : https://www.cancer.gov/types/soft-tissue-sarcoma/patient/adult-soft-tissue-treatment-pdq Soft tissue sarcoma is a general term for all cancers that arise in the soft tissues of nerves, lymph and blood vessels, fat, tendons and muscles. These cancers develop mostly in the abdomen, chest, legs and arms. Soft Tissue Sarcomas symptoms show as swelling under the skin, in the abdomen or near the lungs as painless lumps or causing abdominal pain or cough &amp; breathlessness. Some Soft-tissue Sarcoma medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:20:45', '2022-05-02 17:20:45'),
(26, 'DC26', 'Stomach Cancer', '1651512111-critical_square_image.jpg', 'Buy Stomach Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Stomach Cancer - Treatment : https://www.cancer.gov/types/stomach/patient/stomach-treatment-pdq Stomach Cancers occur in the stomach. The risk factors which cause stomach cancer can be a diet of salty or highly processed foods and smoking. Stomach Cancer may not show any symptoms at the initial stage. Later stages may show symptoms as indigestion, heartburn, nausea and feeling full or bloated even after small food intake. Treatment options are chemotherapy, radiation, medications and surgery. Some Stomach Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:21:51', '2022-05-02 17:21:51'),
(27, 'DC27', 'Testicular Cancer', '1651512189-critical_square_image.jpg', 'Buy Testicular Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Testicular Cancer - Treatment : https://www.cancer.gov/types/testicular/patient/testicular-treatment-pdq Testicular Cancer occurs in the male&rsquo;s testicles which are located underneath the penis inside a loose bag of skin (scrotum) and make male hormones and sperms. The symptoms of Testicular Cancer show as a lump in either testicle and heavy feeling in the scrotum. Treatment options are chemotherapy, radiation, medications and surgery. Some Testicular Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:23:09', '2022-05-02 17:23:09'),
(28, 'DC28', 'Thymus Cancer', '1651512278-critical_square_image.jpg', 'Buy Thymus Cancer  Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Thymus Cancer - Treatment : https://www.cancer.gov/types/thymoma/patient/thymoma-treatment-pdq Thymus Cancers - Thymoma and Thymic Carcinoma or TETs (Thymic Epithelial Tumors) - are rare cancers that forms in the cells covering the thymus outer surface. Symptoms may show as weight loss, loss of appetite, swallowing trouble, chest pain, cough with blood and shortness of breath. Thymus Cancers treatment may require chemotherapy, radiation, hormone therapy and even surgery. Some Thymus Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:24:38', '2022-05-02 17:24:38'),
(29, 'DC29', 'Thyroid Cancer', '1651512349-critical_square_image.jpg', 'Buy Thyroid Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Thyroid Cancer - Treatment : https://www.cancer.gov/types/thyroid/patient/thyroid-treatment-pdq Thyroid Cancer is a cancer of the thyroid which is a butterfly-shaped gland at the base of the neck. There is no clear understanding on the cause of thyroid cancer but it may occur due to environmental and genetic factors. Some patients suffering from Thyroid Cancer may show no symptoms while others may get a lump formation in the neck. Successful treatment options are chemotherapy, radiation, radioactive iodine, hormone therapy and even surgery. Some Thyroid Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:25:49', '2022-05-02 17:25:49'),
(30, 'DC30', 'Urinary tract Cancer', '1651512401-critical_square_image.jpg', 'Buy Urinary Tract Cancer  Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Urinary tract Cancer - Treatment : https://www.cancer.gov/types/urethral/patient/urethral-treatment-pdq Urinary tract Cancer starts in the urothelium and is also called urothelial cancer. It is the most common type of cancer found in the bladder. Symptoms of the Urinary tract Cancer may show as having to urinate more often than usual, pain or burning during urination, feeling to have immediate urination, having trouble urinating or having a weak urine stream or having to urinate frequently in the night. Some Urinary tract medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:26:41', '2022-05-02 17:26:41'),
(31, 'DC31', 'Uterine Cancer', '1651512514-critical_square_image.jpg', 'Buy Uterine Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Uterine Cancer - Treatment : https://www.cancer.gov/types/uterine/patient/uterine-sarcoma-treatment-pdq Uterine Cancer is a type of cancer that forms from the uterus, begining in the layer of cells that form the lining (endometrium) of the uterus. Uterine Cancer risk factors are being overweight and having periods at an early age. The symptoms of Uterine Cancer are vaginal bleeding between periods and after menopause. The main treatment option is surgery to remove the uterus and also radiation or chemotherapy. Some Uterine Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:28:34', '2022-05-02 17:28:34'),
(32, 'DC32', 'Vulvar Cancer', '1651512573-critical_square_image.jpg', 'Buy Vulvar Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Vulvar Cancer - Treatment : https://www.cancer.gov/types/vulvar/patient/vulvar-treatment-pdq Vulvar Cancer is a cancer formation on the outer surface area of female genitals and is most commonly diagnosed in older women. Risks factors causing vulvar cancer are smoking and exposure to human papillomavirus (HPV). Vulvar cancer generally forms as a sore or lump on the vulva also causing itching. Extensive treatment is not required if there is an early diagnosis of vulvar cancer. Some Vulvar Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:29:33', '2022-05-02 17:29:33'),
(33, 'DC33', 'Other Cancer', '1651512628-critical_square_image.jpg', 'Buy Other Cancer Drugs Medications at Online Pharmacy MP 911GobalMedscom', '<p>About Other Cancer - Treatment : https://www.cancer.org/treatment/treatments-and-side-effects/treatment-types.html Cancer treatments can be &quot;local&quot; treatments like surgery and radiation therapy to treat a specific tumor or area of the body. Other Drug treatments can be &quot;systemic&quot; treatments such as targeted therapy, immunotherapy or chemotherapy and affect the entire body. Common treatments for majority of cancer types are Hormone Therapy, Stem Cell or Bone Marrow Transplant, Immunotherapy, Targeted Therapy, Radiation Therapy, Chemotherapy and Surgery. Some Cancer medications are :</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-05-02 17:30:28', '2022-05-02 17:30:28'),
(34, '25', 'Ssardird-2', 'dc3-buy-bone-cancer-drugs-medications-at-online-pharmacy-mp-911globalmedscom.jpg', 'Ssardird-2', '<p>Ssardird-2</p>', NULL, '108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-05-11 05:29:07', '2022-05-10 06:49:44', '2022-05-11 05:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `3-5-home-qa`
--

CREATE TABLE `3-5-home-qa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_5_1_qs_no` int(11) NOT NULL,
  `c_3_5_2_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_3_5_3_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-5-home-qa`
--

INSERT INTO `3-5-home-qa` (`id`, `c_3_5_1_qs_no`, `c_3_5_2_question`, `c_3_5_3_answer`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'Ordering From Universal Drugstore is Easy and Secure', '<p>Universal Drugstore is a pioneer amongst the prescription referral programs working with licensed pharmacy partners in Canada and around the world. For more than a decade, we&rsquo;ve been on the cutting edge of the online prescription service industry. Universal Drugstore is not itself a pharmacy, but an international prescription referral service that provides you with access to low cost prescription drugs. Using our online prescription service is safe and cost-effective. You&rsquo;ll save time and money by ordering your prescription medications online from the convenience of your home. All prescription drugs require a valid prescription from your physician. Therefore, we must receive your prescription prior to shipment. You may send your prescription to us by email or fax, or by uploading on our website, and then send the original prescription to us by mail in order to process your future refills. Alternatively, we can contact your doctor for authorization on a new prescription at no additional charge. Your safety is our top priority, so you can feel completely secure purchasing through us. We also use SSL encryption to secure all of your personal information that&rsquo;s transferred through our website.hi</p>', 0, NULL, '2022-05-04 10:58:22', '2022-06-16 18:28:05'),
(3, 4, 'Advantages of Ordering Your Medications Online from Universal Drugstore ?', '<h3>Universal Drugstore is Safe</h3>\r\n\r\n<p>You can rest assured that you can purchase safely because Universal Drugstore is a certified member of the Canadian International Pharmacy Association (CIPA) Since 2002, this organization has ensured that patients receive their medications from a reliable and trusted source.</p>\r\n\r\n<p>Universal Drugstore requires prescriptions for most orders. Depending on the medication you order, prescriptions are dispensed by either a licensed Canadian pharmacy or by one of our international pharmacy partners. For your safety, all prescriptions are thoroughly checked by a licensed pharmacist.</p>', 0, NULL, '2022-04-22 01:27:13', '2022-06-16 07:18:23'),
(4, 1, 'Always the Lowest Prices with our Low Price Guarantee', '<p>Our prices are already up to 80% lower than your local pharmacy on average. We are committed to providing the best service and prices, which is why we&rsquo;ll also match the price of any other online pharmacy.</p>\r\n\r\n<p>You can order all of your medications from Universal Drugstore without worrying about whether you&rsquo;ve missed out on great savings elsewhere.</p>', 0, NULL, '2022-04-22 01:28:20', '2022-06-23 07:02:18'),
(5, 1, 'Customer Support Available 24/7', '<p>If you have any questions, one of our patient care representatives will be happy to speak with you. Our customer care call center is open 24 hours a day, 7 days a week, to ensure you receive the best customer service in the industry.</p>', 0, NULL, '2022-04-22 01:29:26', '2022-06-23 07:01:50'),
(6, 7, 'Free Pharmacist Counselling', '<p>If you have questions about your prescription medications &ndash; or have any drug related questions &ndash; licensed pharmacists are available with just a phone call or email (10am-4pm CST Monday-Friday, excluding holidays).</p>', 0, NULL, '2022-04-22 01:30:43', '2022-06-14 17:46:33'),
(7, 1, '30-Day Return Policy', '<p>We offer a 30-day return policy to give you full confidence when ordering from us.</p>\r\n\r\n<p>If you decide to return your prescription medication, please call or email us to obtain authorization and instructions for the return. Once we receive the returned medication, we will credit your account for the unused medication</p>', 0, NULL, '2022-04-22 01:31:34', '2022-06-17 17:50:11'),
(8, 7, 'Receive Your Prescription Medication Within 2 to 3 Weeks', '<p>Delivery takes approximately 2 to 3 weeks to North America, and 4 to 6 weeks to other countries.</p>', 0, NULL, '2022-04-22 01:32:33', '2022-04-22 01:32:33'),
(9, 8, 'Minimize the Chance of Missing a Dose due to Drug Unavailability', '<p>Medication adherence is essential for a patient&rsquo;s health and safety, which is why we work with multiple international pharmacy partners to ensure we have a wider range of medications than a local pharmacy.</p>\r\n\r\n<p>If one of our international pharmacy partners is not able to supply a certain medication for an order, we are generally able to source the medication from another international pharmacy, subject to the patient&#39;s approval. This greatly increases the chances of receiving your medication on time.</p>\r\n\r\n<p><strong>Contact Us:</strong><br />\r\nToll Free Phone: 1-222-222-3333<br />\r\nToll Free Fax: 1-222-222-3333<br />\r\nInternational Phone: 1-222-222-3333<br />\r\nInternational Phone: 1-222-222-3333<br />\r\nInternational Fax: 1-222-222-3333</p>\r\n\r\n<p><strong>Hours of Operation:</strong><br />\r\nMonday to Friday - 7:00 am to Midnight (CST)<br />\r\nSaturday - 8:00 am to 6:00 pm (CST)<br />\r\nSunday - 9:30 am to 6:00 pm (CST)</p>', 0, NULL, '2022-04-22 01:33:38', '2022-04-22 01:33:38'),
(10, 9, 'Nine', '<p>Nine</p>', 0, NULL, '2022-06-17 17:51:07', '2022-06-17 17:51:07'),
(11, 10, 'ten', '<p>ten</p>', 0, NULL, '2022-06-17 17:51:25', '2022-06-17 17:51:25'),
(12, 11, 'eleven', '<p>eleven</p>', 0, NULL, '2022-06-17 17:51:44', '2022-06-17 17:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `3-6-home-seo`
--

CREATE TABLE `3-6-home-seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_3_6_1_frontend_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_2_browsing_path_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_3_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_4_meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_5_meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_6_hyperlink_page_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_7_canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_8_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_9_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_10_distribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_11_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_12_robots` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_13_revisit_after` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_14_rating_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_15_rating_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_16_other_tags_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_17_other_tags_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_3_6_18_other_tags_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3-6-home-seo`
--

INSERT INTO `3-6-home-seo` (`id`, `c_3_6_1_frontend_url`, `c_3_6_2_browsing_path_name`, `c_3_6_3_meta_title`, `c_3_6_4_meta_description`, `c_3_6_5_meta_keyword`, `c_3_6_6_hyperlink_page_tags`, `c_3_6_7_canonical`, `c_3_6_8_language`, `c_3_6_9_country`, `c_3_6_10_distribution`, `c_3_6_11_author`, `c_3_6_12_robots`, `c_3_6_13_revisit_after`, `c_3_6_14_rating_value`, `c_3_6_15_rating_count`, `c_3_6_16_other_tags_3`, `c_3_6_17_other_tags_4`, `c_3_6_18_other_tags_5`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'as', 'asdasd', 'buy fda approved prescription drugs online at global and canada pharmacy marketplace', 'xvasvasdasd', 'sdf', 'SILDENFIL CITRATE, Sildenafil Phosphate, Silinafeel Numerate, Viagra (Sildenafil Citrate), Zymen (Sildenafil Citrate), Tacofen (Sildenafil Citrate)', 'asd', 'asasd', 'sdg', 'sdg', 'asf', 'sdg', 'sdfg', 'adfg', 'adfg', 'adfg', 'adfg', 'afg', 0, NULL, '2022-05-11 09:17:59', '2022-07-15 11:30:03'),
(7, 'cgvhbgfjhjhgjkhj', 'dfcgv', 'Meta Titles', 'Meta Description', 'Meta Keyword', NULL, 'yuijko', 'Language', 'Country', 'Distribution', 'Author', 'Robots', '15 days', '25', '50', 'cvbn', 'sxdcfvg', 'sxdcf', 0, NULL, NULL, '2022-07-17 10:50:45'),
(8, 'Frontend URL', 'Browsing Path Name', 'Meta Title', 'Meta Description', 'Meta Keyword', 'Hyperlink Page Tags', 'Canonical', 'Language', 'Country', 'Distribution', 'Author', 'Robots', '10', '100', '1000', NULL, NULL, NULL, 0, NULL, '2022-05-11 09:17:59', '2022-07-20 03:00:58'),
(9, 'Frontend URL CHECK', 'Browsing Path Name', 'Meta Title XXXX', 'Meta Description XXXX', 'Meta Keyword XXXXX', NULL, 'Canonical', 'Language', 'Country', 'Distribution', 'Author', 'Robots', '20', '200', '2000', NULL, NULL, NULL, 0, NULL, NULL, '2022-07-20 04:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `4-country-freight`
--

CREATE TABLE `4-country-freight` (
  `id` int(11) NOT NULL,
  `c_4_1_1_s_no` double DEFAULT NULL,
  `c_4_1_2_country_name` varchar(100) DEFAULT NULL,
  `c_4_1_3_country_isd_code` varchar(100) DEFAULT NULL,
  `c_4_1_4_billing_address` varchar(100) DEFAULT NULL,
  `c_4_1_5_delivery_address` varchar(100) DEFAULT NULL,
  `c_4_1_6_priority_display` varchar(100) DEFAULT NULL,
  `c_4_1_7_customs_clearance` varchar(100) DEFAULT NULL,
  `c_4_1_8_patient_use` varchar(100) DEFAULT NULL,
  `c_4_1_9_study_use` varchar(100) DEFAULT NULL,
  `c_4_1_10_dif_freight_chg_inr` double DEFAULT NULL,
  `c_4_1_11_delivery_start` varchar(100) DEFAULT NULL,
  `c_4_1_12_delivery_end` varchar(100) DEFAULT NULL,
  `c_4_1_13_single_freight` double DEFAULT NULL,
  `c_4_1_14_show_single_freight` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4-country-freight`
--

INSERT INTO `4-country-freight` (`id`, `c_4_1_1_s_no`, `c_4_1_2_country_name`, `c_4_1_3_country_isd_code`, `c_4_1_4_billing_address`, `c_4_1_5_delivery_address`, `c_4_1_6_priority_display`, `c_4_1_7_customs_clearance`, `c_4_1_8_patient_use`, `c_4_1_9_study_use`, `c_4_1_10_dif_freight_chg_inr`, `c_4_1_11_delivery_start`, `c_4_1_12_delivery_end`, `c_4_1_13_single_freight`, `c_4_1_14_show_single_freight`, `created_at`, `updated_at`) VALUES
(1, 3, 'Afghanistan', '93', 'Y', 'N', 'GBP-UK-OFX-BCHK', 'Y', 'N', 'Y', 5020, '7', '10', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(3, 1, 'Algeria', '213', 'N', 'N', 'N', 'N', 'Y', 'Y', 3640, NULL, NULL, 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(4, 4, 'American Samoa', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(5, 5, 'Andorra', '376', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(6, 6, 'Angola', '244', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(7, 7, 'Anguilla', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(8, 8, 'Antigua', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(9, 9, 'Argentina', '54', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(10, 10, 'Armenia', '374', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(11, 11, 'Aruba', '297', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(12, 12, 'Australia', '61', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2590, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(13, 13, 'Austria', '43', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(14, 14, 'Azerbaijan', '994', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(15, 15, 'Bahamas', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(16, 16, 'Bahrain', '973', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(17, 17, 'Bangladesh', '880', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2100, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(18, 18, 'Barbados', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(19, 19, 'Belarus', '375', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(20, 20, 'Belgium', '32', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(21, 21, 'Belize', '501', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(22, 22, 'Benin', '229', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(23, 23, 'Bermuda', '0', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(24, 24, 'Bhutan', '975', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2100, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(25, 25, 'Bolivia', '591', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(26, 26, 'Bonaire', '599', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(27, 27, 'Bosnia and Herzegovina', '387', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(28, 28, 'Botswana', '267', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(29, 29, 'Brazil', '55', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(30, 30, 'Brunei', '673', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(31, 31, 'Bulgaria', '359', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3010, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(32, 32, 'Burkina Faso', '226', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(33, 33, 'Cambodia', '855', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(34, 34, 'Cameroon', '237', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(35, 35, 'Canada', '1', 'N', 'N', 'N', 'N', 'N', 'N', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(36, 36, 'Canary Islands', '34', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(37, 37, 'Cape Verde', '238', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(38, 38, 'Cayman Islands', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(39, 39, 'Chad', '235', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(40, 40, 'Chile', '56', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(41, 41, 'China', '86', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2660, '8', '12', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(42, 42, 'Colombia', '57', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(43, 43, 'Comoros', '269', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(44, 44, 'Congo', '243', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(45, 45, 'Cook Islands', '682', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(46, 46, 'Costa Rica', '506', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(47, 47, 'Croatia', '385', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(48, 48, 'Cuba', '53', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(49, 49, 'Curacao', '599', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(50, 50, 'Cyprus', '357', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(51, 51, 'Czech Republic', '420', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(52, 52, 'Denmark', '45', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(53, 53, 'Djibouti', '253', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(54, 54, 'Dominica', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(55, 55, 'Dominican Republic', '1-829', 'Y', 'N', 'N', 'N', 'Y', 'Y', 5000, '7', '15', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(56, 56, 'East Timor', '670', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:56'),
(57, 57, 'Ecuador', '593', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(58, 58, 'Egypt', '20', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(59, 59, 'El Salvador', '503', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(60, 60, 'Estonia', '372', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2030, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(61, 61, 'Ethiopia', '251', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3640, '10', '14', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(62, 62, 'Falkland Islands', '500', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(63, 63, 'Faroe Islands', '298', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(64, 64, 'Fiji', '679', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(65, 65, 'Finland', '358', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(66, 66, 'France', '33', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '6', '10', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(67, 67, 'French Guyana', '594', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(68, 68, 'Gabon', '241', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(69, 69, 'Gambia', '220', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(70, 70, 'Georgia', '995', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3640, '8', '13', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(71, 71, 'Germany', '49', 'Y', 'Y', 'N', 'N', 'Y', 'N', 2450, NULL, NULL, 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(72, 72, 'Ghana', '233', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(73, 73, 'Gibraltar', '350', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3010, '7', '12', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(74, 74, 'Greece', '30', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(75, 75, 'Greenland', '299', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(76, 76, 'Grenada', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(77, 77, 'Guadeloupe', '590', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(78, 78, 'Guam', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(79, 79, 'Guatemala', '502', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(80, 80, 'Guernsey', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(81, 81, 'Guinea Republic', '240', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(82, 82, 'Guinea-Bissau', '245', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(83, 83, 'Guinea-Equatorial', '240', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(84, 84, 'Guyana (British)', '592', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(85, 85, 'Haiti', '509', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(86, 86, 'Honduras', '504', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3290, '15', '20', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(87, 87, 'Hong Kong', '852', 'N', 'Y', 'N', 'Y', 'N', 'Y', 2520, '4', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(88, 88, 'Hungary', '36', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(89, 89, 'Iceland', '354', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3010, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(90, 90, 'Indonesia', '62', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2800, '5', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(91, 91, 'Ireland', '353', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '2', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(92, 92, 'Israel', '972', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3010, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(93, 93, 'Italy', '39', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(94, 94, 'Jamaica', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(95, 95, 'Japan', '81', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2800, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(96, 96, 'Jersey', '0', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3010, '3', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(97, 97, 'Jordan', '962', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(98, 98, 'Kazakhstan', '7', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(99, 99, 'Kenya', '254', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(100, 100, 'Kiribati', '686', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(101, 101, 'South Korea', '850', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2800, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(102, 102, 'Kosovo', '383', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(103, 103, 'Kuwait', '965', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(104, 104, 'Kyrgyzstan', '996', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(105, 105, 'Laos', '856', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(106, 106, 'Latvia', '371', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(107, 107, 'Lebanon', '961', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(108, 108, 'Lesotho', '266', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(109, 109, 'Liechtenstein', '423', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(110, 110, 'Lithuania', '370', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(111, 111, 'Luxembourg', '352', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(112, 112, 'Macau', '853', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(113, 113, 'Macedonia', '389', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(114, 114, 'Madagascar', '261', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(115, 115, 'Malawi', '265', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(116, 116, 'Malaysia', '60', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2520, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(117, 117, 'Maldives', '960', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2100, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(118, 118, 'Malta', '356', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(119, 119, 'Marshall Islands', '692', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(120, 120, 'Martinique', '596', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(121, 121, 'Mauritania', '222', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(122, 122, 'Mauritius', '230', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(123, 123, 'Mayotte', '262', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(124, 124, 'Mexico', '52', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(125, 125, 'Micronesia', '691', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(126, 126, 'Moldova', '373', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(127, 127, 'Monaco', '377', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(128, 128, 'Mongolia', '976', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(129, 129, 'Montenegro', '382', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(130, 130, 'Montserrat', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(131, 131, 'Morocco', '212', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3640, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(132, 132, 'Mozambique', '258', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(133, 133, 'Myanmar', '95', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2800, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(134, 134, 'Namibia', '264', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(135, 135, 'Nauru', '674', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(136, 136, 'Nepal', '977', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2100, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(137, 137, 'Netherlands', '31', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '2', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(138, 138, 'Nevis', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(139, 139, 'New Caledonia', '687', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(140, 140, 'New Zealand', '64', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2590, '2', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(141, 141, 'Nicaragua', '505', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(142, 142, 'Nigeria', '234', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3640, '3', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(143, 143, 'Niue', '683', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(144, 144, 'Norway', '47', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(145, 145, 'Oman', '968', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(146, 146, 'Pakistan', '92', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 2590, NULL, NULL, 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(147, 147, 'Palau', '680', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(148, 148, 'Panama', '507', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(149, 149, 'Papua New Guinea', '675', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2170, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(150, 150, 'Paraguay', '595', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(151, 151, 'Peru', '51', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(152, 152, 'Philippines', '63', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2800, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(153, 153, 'Poland', '48', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(154, 154, 'Portugal', '351', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(155, 155, 'Puerto Rico', '0', ' 1-939\"', 'Y', 'Y', 'N', 'N', 'Y', 0, '3780', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(156, 156, 'Qatar', '974', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2590, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(157, 157, 'Reunion Island', '262', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(158, 158, 'Romania', '40', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(159, 159, 'Russian Federation', '7', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 3010, '15', '18', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(160, 160, 'Rwanda', '250', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(161, 161, 'Saint Helena', '290', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(162, 162, 'Saipan', '670', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(163, 163, 'Samoa', '685', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(164, 164, 'San Marino', '378', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(165, 165, 'Sao Tome and Principe', '239', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(166, 166, 'Saudi Arabia', '966', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2590, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(167, 167, 'Senegal', '221', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(168, 168, 'Serbia', '381', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(169, 169, 'Seychelles', '248', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(170, 170, 'Sierra Leone', '232', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(171, 171, 'Singapore', '65', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2520, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(172, 172, 'Slovakia', '421', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(173, 173, 'Slovenia', '386', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2030, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(174, 174, 'Solomon Islands', '677', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(175, 175, 'Somaliland (North Somalia)', '252', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(176, 176, 'South Africa', '27', 'N', 'Y', 'N', 'N', 'Y', 'Y', 3290, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(177, 177, 'Spain', '34', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(178, 178, 'Sri Lanka', '94', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2100, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(179, 179, 'St. Barthelemy', '590', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(180, 180, 'St. Eustatius', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(181, 181, 'St. Kitts', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(182, 182, 'St. Lucia', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(183, 183, 'St. Maarten', '590', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(184, 184, 'St. Vincent', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(185, 185, 'Suriname', '597', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(186, 186, 'Swaziland', '268', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(187, 187, 'Sweden', '46', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '3', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(188, 188, 'Switzerland', '41', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2450, '2', '4', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(189, 189, 'Tahiti', '689', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(190, 190, 'Taiwan', '886', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2800, '5', '8', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(191, 191, 'Tajikistan', '992', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(192, 192, 'Tanzania', '255', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(193, 193, 'Thailand', '66', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2520, '7', '10', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(194, 194, 'Togo', '228', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(195, 195, 'Tonga', '676', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(196, 196, 'Trinidad and Tobago', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(197, 197, 'Tunisia', '216', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(198, 198, 'Turkey', '90', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3010, '3', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(199, 199, 'Turks and Caicos Islands', '0', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(200, 200, 'Tuvalu', '688', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(201, 201, 'Uganda', '256', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(202, 202, 'Ukraine', '380', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(203, 203, 'UAE', '971', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2520, '3', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(204, 204, 'UK', '44', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 3500, '4', '7', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(205, 205, 'USA', '1', 'Y', 'Y', 'USD-HK-AW-BCHK', 'Y', 'N', 'Y', 2870, '3', '5', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(206, 206, 'Uruguay', '598', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(207, 207, 'Uzbekistan', '998', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(208, 208, 'Vanuatu', '678', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(209, 209, 'Vatican City State', '379', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 2450, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(210, 210, 'Venezuela', '58', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3290, '7', '11', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(211, 211, 'Vietnam', '84', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 2800, '6', '9', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(212, 212, 'Virgin Islands (British)', '0', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3290, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(213, 213, 'Virgin Islands (US)', '0', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 3780, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(214, 214, 'Zambia', '260', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57'),
(215, 215, 'Zimbabwe', '263', 'Y', 'Y', 'N', 'N', 'Y', 'Y', 3640, '', '', 3750, 'N', '2022-05-10 04:42:27', '2022-07-03 17:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `5-bank-detail`
--

CREATE TABLE `5-bank-detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_5_1_s_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_2_company_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_5_3_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_5_4_account_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_5_bank_name_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_6_bank_branch_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_7_account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_8_account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_9_bank_transfer_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_10_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_11_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_5_12_usd_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `5-bank-detail`
--

INSERT INTO `5-bank-detail` (`id`, `c_5_1_s_no`, `c_5_2_company_code`, `c_5_3_account_name`, `c_5_4_account_address`, `c_5_5_bank_name_location`, `c_5_6_bank_branch_code`, `c_5_7_account_type`, `c_5_8_account_no`, `c_5_9_bank_transfer_code`, `c_5_10_email`, `c_5_11_currency`, `c_5_12_usd_rate`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BD-1', 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 'US$', '1', 0, NULL, '2022-05-02 04:49:55', '2022-05-24 09:41:48'),
(2, 'BD-2', 'USD-CA-TW-BCCA', 'BRUDER COSMOGEN LIMITED', '1145 MIDLAND AVENUE, UNIT 9, SCARBOROUGH, ONTARIO M1K 4H2, CANADA', 'TransferWise / Evolve Bank, 19 W 24th Street, New York NY 10010, United States', NULL, 'Checking', '8310222944', 'SWIFT/BIC : CMFGUS33', 'brudercosmogen@gmail.com', 'US$', '1', 0, NULL, '2022-05-02 04:59:06', '2022-05-24 09:42:26'),
(3, 'BD-3', 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 'AU$', '1.512', 0, NULL, '2022-05-02 05:01:02', '2022-07-06 09:37:09'),
(4, 'BD-4', 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 'GB£', '0.8002', 0, NULL, '2022-05-10 09:30:47', '2022-07-06 09:37:09'),
(5, 'BD-5', 'AUD-AU-OFX-BCHKAA', 'OzForex Limited Re: BRUDER COSMOGEN LIMITEDAA', 'Level 19, 60 Margaret Street  Sydney NSW 2000AA', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, AustraliaAA', NULL, 'CurrentAA', '639100745AA', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXXAA', 'brudercosmogen.hk@gmail.comAA', 'AU$', NULL, 0, '2022-05-10 09:46:46', '2022-05-10 09:31:56', '2022-05-10 09:46:46'),
(6, 'BD-6', 'AUD-AU-OFX-BCHKAA', 'OzForex Limited Re: BRUDER COSMOGEN LIMITEDAA', 'Level 19, 60 Margaret Street  Sydney NSW 2000AA', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, AustraliaAA', 'AA', 'CurrentAA', '639100745AA', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXXAA', 'brudercosmogen.hk@gmail.comAA', 'AU$', NULL, 0, '2022-05-19 08:17:42', '2022-05-10 09:33:24', '2022-05-19 08:17:42'),
(7, 'BD-7', 'USD-HK-AW-BCHKgfhg', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 'US$', NULL, 0, '2022-05-10 09:46:55', '2022-05-10 09:35:47', '2022-05-10 09:46:55'),
(8, 'BD-8', 'EUR-EU-AW-BCHK', 'BRUDER COSMOGEN LIMITED', NULL, 'AS LHV PANK, Tartu mnt 2, Tallinn 10145, Estonia', NULL, NULL, 'EE987777000063293670', 'SWIFT : LHVBEE22', 'brudercosmogen.hk@gmail.com', 'EU€', '0.9490971', 0, NULL, '2022-07-04 11:12:20', '2022-07-06 09:37:09'),
(9, 'BD-9', 'USD-US-OFX-BCHK', 'USFOREX INC - BRUDER COSMOGEN LTD.', '49 STEVENSON ST, 13-F, SAN FRANCISCO, CA 94105, USA', 'BANK OF AMERICA, NA, HENRICO, VA, 23228, USA', NULL, 'Checking', '1291779460', 'Routing No. : 121000358   Swift/BIC : BOFAUS3N', 'brudercosmogen.hk@gmail.com', 'US$', '1', 0, NULL, '2022-07-17 12:40:50', '2022-07-17 12:40:50'),
(10, 'BD-10', 'NZD-NZ-AW-BCHK', 'BRUDER COSMOGEN LIMITED', NULL, 'ANZ Bank New Zealand, 2329 Albert St, Auckland 1010, New Zealand', '04-2024', NULL, '04-2024-0126838-00', NULL, 'brudercosmogen.hk@gmail.com', 'NZ$', '1.5146838', 0, NULL, '2022-07-20 00:35:26', '2022-07-20 00:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `12-promo-discount`
--

CREATE TABLE `12-promo-discount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_12_1_s_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_12_2_coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_12_3_min_order_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_12_4_discount_amt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_12_5_issued_on` date DEFAULT NULL,
  `c_12_6_valid_till_date` date DEFAULT NULL,
  `c_12_7_issued_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_12_8_issued_agent_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_12_9_no_of_uses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_12_10_times_used` int(11) DEFAULT '0',
  `c_12_11_promo_mail_1` date DEFAULT NULL,
  `c_12_12_promo_mail_2` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `12-promo-discount`
--

INSERT INTO `12-promo-discount` (`id`, `c_12_1_s_no`, `c_12_2_coupon_code`, `c_12_3_min_order_value`, `c_12_4_discount_amt`, `c_12_5_issued_on`, `c_12_6_valid_till_date`, `c_12_7_issued_email`, `c_12_8_issued_agent_email`, `c_12_9_no_of_uses`, `c_12_10_times_used`, `c_12_11_promo_mail_1`, `c_12_12_promo_mail_2`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test12', '200', '50', '2022-06-21', '2023-04-12', NULL, NULL, '5', 2, NULL, NULL, 0, NULL, '2022-06-28 04:25:03', '2022-06-30 07:20:10'),
(2, NULL, 'EPAI', '0', '10', '2022-07-01', '2022-07-31', NULL, 'sj.1802@gmail.com', '10000', 0, NULL, NULL, 0, NULL, '2022-07-01 08:36:29', '2022-07-01 08:36:29'),
(3, NULL, 'EPAI-2', '600', '45', '2022-07-07', '2022-07-18', NULL, NULL, '3', 2, NULL, NULL, 0, NULL, '2022-07-07 06:36:09', '2022-07-07 11:46:18'),
(7, NULL, 'EPAI-1', '500', '30', '2022-07-06', '2022-07-15', 'saanjoyjain@gmail.com', 'arhamconsultants@gmail.com', '1', 1, NULL, NULL, 0, NULL, '2022-07-07 06:55:15', '2022-07-07 07:22:57'),
(8, NULL, 'EPAI-3', '550', '35', '2022-07-06', '2022-07-20', NULL, NULL, '1', 1, NULL, NULL, 0, NULL, '2022-07-07 06:56:34', '2022-07-07 07:06:54'),
(9, NULL, 'EPAI-4', '0', '50', '2022-07-17', '2022-08-17', NULL, NULL, '5', 0, NULL, NULL, 0, NULL, '2022-07-17 14:35:05', '2022-07-17 14:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `14-summary`
--

CREATE TABLE `14-summary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reorder_invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `c_14_2_online_invoice_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_4_cart_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_country` int(11) NOT NULL,
  `c_14_6_proforma_invoice_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipment_url` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_7_order_invoice_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_8_excel_order_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_9_login_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_10_payer_full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_11_patient_relation_payer` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_12_payer_address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_13_payer_address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_14_pay_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_15_payer_state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_16_payer_zip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_17_payer_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_18_payer_mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_19_patient_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_20_patient_sex` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_21_patient_age` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_22_parcel_receivers_full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_23_receiver_relation_patient` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_24_receiver_address_line_1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_25_receiver_address_line_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_26_receiver_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_27_receiver_state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_28_receiver_zip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_29_receiver_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_30_receiver_mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_31_end_use_selected` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_32_doctor_prescription_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_33_undertaking_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_74_total_order_value` decimal(10,2) DEFAULT NULL,
  `c_14_75_coupon_code_used` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_76_promo_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_77_shipping_charges` decimal(10,2) DEFAULT NULL,
  `c_14_78_additional_charges` decimal(10,2) DEFAULT NULL,
  `c_14_79_semi_total_amount` decimal(10,2) DEFAULT NULL,
  `c_14_80_convert_payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_81_pod_charges` decimal(10,2) DEFAULT NULL,
  `c_14_82_credit_card_processing_fees` decimal(10,2) DEFAULT NULL,
  `c_14_83_currency_of_order` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_84_total_amount` decimal(10,2) DEFAULT NULL,
  `c_14_85_refil_after_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_86_cc_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_88_cc_state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_90_email_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_91_cc_request_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_92_cc_request_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_93_pay_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_94_forex_currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conversion_usd_to_forex_rate` decimal(10,4) DEFAULT NULL,
  `c_14_95_amount` decimal(10,2) DEFAULT '0.00',
  `c_14_96_forex_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_97_received_on_date` date DEFAULT NULL,
  `c_14_98_conversion_forex_to_usd_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_99_usd_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forex_gain_loss` int(11) DEFAULT NULL,
  `c_14_100_usd_bal_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_107_payment_received_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_108_payment_received_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_115_parcel_shipment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_116_carrier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_117_tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_118_tracking_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for_arrival_date` date DEFAULT NULL,
  `customs_cl_date` date DEFAULT NULL,
  `c_14_124_delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proforma_invoice_mail` date DEFAULT NULL,
  `order_invoice_mail` date DEFAULT NULL,
  `order_reminder_or1` date DEFAULT NULL,
  `order_reminder_or2` date DEFAULT NULL,
  `order_reminder_or3` date DEFAULT NULL,
  `cc_payment_reminder_mail1` date DEFAULT NULL,
  `cc_payment_reminder_mail2` date DEFAULT NULL,
  `cc_payment_thanks_mail` date DEFAULT NULL,
  `bt_payment_reminder_mail1` date DEFAULT NULL,
  `bt_payment_reminder_mail2` date DEFAULT NULL,
  `bt_payment_thanks_mail` date DEFAULT NULL,
  `shipment_mail` date DEFAULT NULL,
  `foreign_arrival_mail` date DEFAULT NULL,
  `custom_clearance_mail` date DEFAULT NULL,
  `delivered_mail` date DEFAULT NULL,
  `reviews_mail1` date DEFAULT NULL,
  `reviews_mail2` date DEFAULT NULL,
  `refil_reminder_mail1` date DEFAULT NULL,
  `refil_reminder_mail2` date DEFAULT NULL,
  `refil_reminder_mail3` date DEFAULT NULL,
  `order_hold_mail` date DEFAULT NULL,
  `bank_company_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_address` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name_location` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_transfer_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_email` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_pdf` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_old` tinyint(1) NOT NULL DEFAULT '0',
  `is_order` tinyint(1) NOT NULL DEFAULT '0',
  `is_reorder` tinyint(4) NOT NULL DEFAULT '0',
  `reorder_date` date DEFAULT NULL,
  `checkout_step` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `14-summary`
--

INSERT INTO `14-summary` (`id`, `reorder_invoice_no`, `user_id`, `c_14_2_online_invoice_no`, `c_14_4_cart_url`, `arrival_country`, `c_14_6_proforma_invoice_url`, `shipment_url`, `c_14_7_order_invoice_url`, `c_14_8_excel_order_url`, `c_14_9_login_email`, `c_14_10_payer_full_name`, `c_14_11_patient_relation_payer`, `c_14_12_payer_address_line_1`, `c_14_13_payer_address_line_2`, `c_14_14_pay_city`, `c_14_15_payer_state`, `c_14_16_payer_zip`, `c_14_17_payer_country`, `c_14_18_payer_mobile`, `c_14_19_patient_name`, `c_14_20_patient_sex`, `c_14_21_patient_age`, `c_14_22_parcel_receivers_full_name`, `c_14_23_receiver_relation_patient`, `c_14_24_receiver_address_line_1`, `c_14_25_receiver_address_line_2`, `c_14_26_receiver_city`, `c_14_27_receiver_state`, `c_14_28_receiver_zip`, `c_14_29_receiver_country`, `c_14_30_receiver_mobile`, `c_14_31_end_use_selected`, `c_14_32_doctor_prescription_url`, `c_14_33_undertaking_url`, `c_14_74_total_order_value`, `c_14_75_coupon_code_used`, `c_14_76_promo_discount`, `c_14_77_shipping_charges`, `c_14_78_additional_charges`, `c_14_79_semi_total_amount`, `c_14_80_convert_payment_mode`, `c_14_81_pod_charges`, `c_14_82_credit_card_processing_fees`, `c_14_83_currency_of_order`, `c_14_84_total_amount`, `c_14_85_refil_after_days`, `c_14_86_cc_name`, `c_14_88_cc_state`, `c_14_90_email_address`, `c_14_91_cc_request_details`, `c_14_92_cc_request_link`, `c_14_93_pay_mode`, `c_14_94_forex_currency`, `conversion_usd_to_forex_rate`, `c_14_95_amount`, `c_14_96_forex_received`, `c_14_97_received_on_date`, `c_14_98_conversion_forex_to_usd_rate`, `c_14_99_usd_received`, `forex_gain_loss`, `c_14_100_usd_bal_due`, `c_14_107_payment_received_amount`, `c_14_108_payment_received_date`, `c_14_115_parcel_shipment_date`, `c_14_116_carrier`, `c_14_117_tracking_no`, `c_14_118_tracking_url`, `for_arrival_date`, `customs_cl_date`, `c_14_124_delivered_date`, `proforma_invoice_mail`, `order_invoice_mail`, `order_reminder_or1`, `order_reminder_or2`, `order_reminder_or3`, `cc_payment_reminder_mail1`, `cc_payment_reminder_mail2`, `cc_payment_thanks_mail`, `bt_payment_reminder_mail1`, `bt_payment_reminder_mail2`, `bt_payment_thanks_mail`, `shipment_mail`, `foreign_arrival_mail`, `custom_clearance_mail`, `delivered_mail`, `reviews_mail1`, `reviews_mail2`, `refil_reminder_mail1`, `refil_reminder_mail2`, `refil_reminder_mail3`, `order_hold_mail`, `bank_company_code`, `bank_account_name`, `bank_account_address`, `bank_name_location`, `bank_branch_code`, `account_type`, `account_no`, `bank_transfer_code`, `bank_email`, `is_pdf`, `deleted_at`, `is_old`, `is_order`, `is_reorder`, `reorder_date`, `checkout_step`, `created_at`, `updated_at`) VALUES
(1, '200135', 8, '200108', '0609-aff044d991a8', 204, '200108-f8780d48eb00', 'ds/200108-98697360b253', '200108-7701df33a82b', '200108-3dd4295ed32c', 'saanjoyjain@gmail.com', 'B Payers Full Name25', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3192.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Bank', 'AU$', '1.5000', '4788.00', '3500', '2022-06-13', '0.6667', '2333', -859, '859', NULL, NULL, '2022-06-14', 'DHL', '1763227970', 'https://www.indiapost.gov.in/_layouts/15/DOP.Portal.Tracking/TrackConsignment.aspx', '2022-06-15', '2022-06-16', '2022-06-17', '2022-06-11', NULL, NULL, NULL, NULL, '2022-06-13', NULL, NULL, NULL, NULL, NULL, '2022-06-13', NULL, '2022-06-13', '2022-06-13', '2022-06-13', NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-06-09 07:04:19', '2022-07-08 07:22:15'),
(4, '200127', 8, '200109', NULL, 204, '200109-ab349bccde34', NULL, '200109-4aeee9b75a95', '200109-f64c46536847', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3511.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://www.airwallex.com/pay/hk/link/3a3cc62d5cc9', 'Credit Card', 'US$', '1.0000', '3511.00', '3511', '2022-06-11', '1.0000', '3511', 0, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-13', '2022-06-11', NULL, NULL, NULL, NULL, '2022-06-13', NULL, '2022-06-13', NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-06-09 07:11:21', '2022-06-29 06:57:27'),
(5, NULL, 8, '200110', '0611-d9ff2321c1ed', 204, '200110-f24a8054c793', NULL, '200110-8a1c339f7842', '200110-729eb4ec98d0', 'saanjoyjain@gmail.com', 'B Payers Full Names', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', '200110-62e95f261fcf.jpg', NULL, '643.00', NULL, '0', '50.00', '0.00', '693.00', 'Advance', NULL, '69.00', NULL, '762.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Credit Card', 'US$', '1.0000', '762.00', '0', NULL, '1.0000', '0', -762, '762', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11', NULL, NULL, NULL, NULL, '2022-06-13', '2022-06-13', NULL, NULL, NULL, NULL, '2022-06-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-06-11 06:30:04', '2022-06-13 07:41:55'),
(6, NULL, 8, '200111', '0613-77b6859bf26e', 204, '200111-41800bf22c91', NULL, '200111-00f7dbcaddb4', '200111-ef4fb1403210', 'saanjoyjain@gmail.com', 'B Payers Full Names', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1243.00', NULL, NULL, '50.00', '0.00', '1293.00', 'Advance', NULL, NULL, NULL, '1293.00', '100', 'B Payers Full Names', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '1293.00', '1200', '2022-06-16', '1', '1200', -93, '93', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-13 09:32:19', '2022-06-16 18:09:43'),
(7, NULL, 8, NULL, '0614-a107252065ca', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Names', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '360.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-06-14 17:52:56', '2022-06-14 17:53:39'),
(8, NULL, 8, NULL, '0616-4b19cb7130d9', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Names', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '1279.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '112', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-06-16 07:44:37', '2022-06-16 07:48:32'),
(9, NULL, 8, '200112', '0616-68eb83f7e53d', 204, '200112-a372cfcb7699', NULL, '200112-112ef5748fe8', '200112-56a253458d27', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, NULL, '50.00', '0.00', '712.00', 'Advance', NULL, NULL, NULL, '712.00', '111', 'B Payers Full Names', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '712.00', '0', NULL, '1', '0', 712, '712', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-16 17:38:35', '2022-06-16 17:39:27'),
(10, NULL, 8, '200113', '0617-12ce07c0fcf9', 204, '200113-fceabdace6c5', NULL, '200113-9f1443a0bc38', '200113-14ed90ab0f08', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1279.00', NULL, NULL, '50.00', '0.00', '1329.00', 'Advance', NULL, NULL, NULL, '1329.00', '122', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '1329.00', '1300', '2022-06-17', '1', '1300', -29, '29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-17 04:50:10', '2022-06-17 06:10:53'),
(11, NULL, 8, '200114', '0617-348d3abd86a8', 204, '200114-e9bcb4a77aaf', NULL, '200114-677982bcbacc', '200114-b21dbf5ae242', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1279.00', NULL, NULL, '50.00', '0.00', '1329.00', 'Advance', NULL, NULL, NULL, '1329.00', '111', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '1329.00', '0', NULL, '1', '0', 1329, '1329', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-17 17:16:11', '2022-06-17 17:16:59'),
(12, NULL, 8, '200115', '0617-304f65644fc6', 204, '200115-fb480748b073', NULL, '200115-3287a76e1f52', '200115-013a4f4c08d1', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, '0', '50.00', '0.00', '712.00', 'Advance', NULL, NULL, NULL, '712.00', '111', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '570.00', '700', '2022-06-17', '1.2497', '874.7900000000001', 163, '-162', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-17 17:17:47', '2022-06-18 11:49:36'),
(13, NULL, 8, '200116', '0617-498212af32f3', 204, '200116-2cfcb36fd21a', NULL, '200116-8b20510f321f', '200116-b1a8fda80098', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, NULL, '50.00', '0.00', '712.00', 'Advance', NULL, NULL, NULL, '712.00', '111', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '712.00', '712', '2022-06-18', '1', '712', 0, '0', NULL, NULL, '2022-06-19', 'DHL', '1763227970', 'https://www.indiapost.gov.in/_layouts/15/DOP.Portal.Tracking/TrackConsignment.aspx', '2022-06-20', '2022-06-21', '2022-06-22', '2022-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', '2022-06-17', NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-06-17 17:55:56', '2022-07-08 10:02:03'),
(14, NULL, 8, NULL, '0617-5cd9a309aad7', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '662.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-06-17 18:14:32', '2022-06-17 18:14:38'),
(15, NULL, 6, NULL, '0618-744f035af974', 204, NULL, NULL, NULL, NULL, 'demo1@gmail.com', 'dsfads', 'Self', 'asdf', 'sadf', 'sadf', 'sadf', 'sadf', 'UK', '453654', 'yogesh', 'M', '58', 'yogesh father', 'Father', 'address1', 'address2', 'cirty', 'state', '11008646', 'UK', '453256356566', NULL, NULL, NULL, '1279.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, 'demo1@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, NULL, 4, '2022-06-18 08:57:17', '2022-06-18 10:16:02'),
(16, NULL, 8, NULL, '0618-41575bd1e4fb', 203, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'Sahil Jain', 'Brother', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UAE', '+1-90(89)9876', 'Sanjay Jain', 'M', '33', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UAE', '+1-90(89)9876', NULL, NULL, NULL, '662.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, NULL, 4, '2022-06-18 09:21:58', '2022-06-18 10:13:51'),
(17, NULL, 8, '200117', '0618-578991feb9b5', 204, '200117-0e4b6d42a09f', NULL, NULL, '200117-ea7660a41a3b', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1941.00', NULL, NULL, '50.00', NULL, '1991.00', 'Advance', NULL, NULL, NULL, '1991.00', '111', 'B Payers Full Name', 'B State, Afghanistan', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '1991.00', '0', NULL, '1', '0', 1991, '1991', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-06-18 11:56:58', '2022-06-18 12:01:52'),
(18, NULL, 8, '200118', '0618-f56ce36b9ea3', 204, '200118-9c664b92a34c', NULL, NULL, '200118-ed84c4978992', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '2079.00', NULL, NULL, '50.00', NULL, '2129.00', 'Advance', NULL, NULL, NULL, '2129.00', '111', 'B Payers Full Name', 'B State, Afghanistan', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '1704.00', '0', NULL, '0.8002', '0', 2129, '1364', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-06-18 12:27:15', '2022-06-18 12:27:34'),
(19, NULL, 8, '200119', '0618-45f1492ee34e', 204, '200119-c0a506fcc218', NULL, NULL, '200119-ef92154c60a3', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Husband', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '2079.00', NULL, NULL, '50.00', NULL, '2129.00', 'Advance', NULL, NULL, NULL, '2129.00', '111', 'B Payers Full Name', 'B State, Albania', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '2129.00', '0', NULL, '1', '0', 2129, '2129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-06-18 12:39:05', '2022-06-18 12:39:42'),
(20, NULL, 8, '200120', '0618-af4222e631af', 204, '200120-860d4d1ed5a1', NULL, NULL, '200120-77ef4b531a70', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Husband', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, NULL, '50.00', NULL, '712.00', 'Advance', NULL, NULL, NULL, '712.00', '111', 'B Payers Full Name', 'B State, Afghanistan', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '712.00', '0', NULL, '1', '0', 712, '712', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-06-18 12:44:06', '2022-06-18 12:44:39'),
(21, NULL, 8, '200121', '0623-9ef420286aa3', 204, '200121-69cde6a241e5', NULL, NULL, '200121-eaabc752ce15', 'saanjoyjain@gmail.com', 'Manan Jain', 'Father', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '1111', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, NULL, '50.00', NULL, '712.00', 'Advance', NULL, NULL, NULL, '712.00', '100', 'Manan Jain', 'B State, Afghanistan', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '570.00', '0', NULL, '0.8002', '0', 712, '456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-06-23 07:27:13', '2022-06-23 07:29:12'),
(22, NULL, 8, '200122', '0623-54b1e07f5163', 204, '200122-91437cddd225', NULL, '200122-74b4826a628a', '200122-117248a146bf', 'saanjoyjain@gmail.com', 'Sushil Kr Jain', 'Son', '35 Veer Nagar Jain Colony', 'Next to Rana PRATAP Bagh', 'new delhi', 'Delhi', '110007', 'Australia', '+919999884828', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '2543.00', NULL, '0', '50.00', '0.00', '2593.00', 'Advance', NULL, NULL, NULL, '2593.00', '90', 'Sushil Kr Jain', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '2075.00', '0', NULL, '1.2497', '0', NULL, '2593', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-06-23 07:56:50', '2022-07-22 03:06:01'),
(23, NULL, 8, '200123', '0624-35e3fa247488', 204, '200123-93ba6fcc705c', NULL, '200123-587fb2901b58', '200123-7e2cf96c05a0', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1279.00', NULL, NULL, '50.00', '0.00', '1329.00', 'Advance', NULL, NULL, NULL, '1329.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '1063.00', '0', NULL, '0.8002', '0', 1329, '851', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-06-24 06:48:02', '2022-07-07 11:44:22'),
(24, NULL, 8, NULL, '0624-54f47618390e', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', '204', '+1-90(89)98761', NULL, NULL, NULL, '662.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 2, '2022-06-24 09:39:41', '2022-06-24 09:39:41'),
(25, NULL, 8, NULL, '0624-997e565b739c', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', '204', '+1-90(89)98761', NULL, NULL, NULL, '662.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '122', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 2, '2022-06-24 09:43:59', '2022-06-24 09:43:59'),
(26, NULL, 8, NULL, '0628-daa3028bf7bf', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', NULL, '+1-90(89)98761', NULL, NULL, NULL, '662.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 2, '2022-06-28 04:20:19', '2022-06-29 06:52:26'),
(33, NULL, 8, '200124', '0629-dc3f14bd6e3e', 204, '200124-34d7f6d0da35', NULL, '200124-83ee651509ee', '200124-8a1123257072', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', 'test12', '50', '47.00', '0.00', '1191.00', 'Advance', NULL, NULL, NULL, '1191.00', '12', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '953.00', '0', NULL, '0.8002', '0', 1191, '763', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-06-29 12:58:13', '2022-07-07 11:49:23'),
(38, NULL, 8, '200125', '0630-a684b2c3084b', 204, '200125-de405d7a9c65', NULL, '200125-b20e60d254b7', '200125-b1b806dcb3ed', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', 'test12', '50', '47.00', '0.00', '1191.00', 'Advance', NULL, NULL, NULL, '1191.00', '48', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '953.00', '950', '2022-07-04', '1.2497', '1187', -4, '4', NULL, NULL, '2022-07-05', 'DHL', '1763227970', 'https://www.dhl.com/in-en/home/tracking/tracking-express.html?submit=1&tracking-id=1763227970', '2022-07-05', '2022-07-06', '2022-07-07', '2022-06-30', NULL, NULL, NULL, '2022-07-04', NULL, NULL, NULL, '2022-07-04', '2022-07-04', NULL, '2022-07-04', '2022-07-04', '2022-07-04', '2022-07-04', '2022-07-04', '2022-07-04', NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-06-30 06:04:17', '2022-07-07 10:59:05'),
(39, NULL, 8, NULL, '0704-dd62acf065aa', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Afghanistan', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '4284.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 3, '2022-07-04 18:11:23', '2022-07-04 18:15:16'),
(40, NULL, 8, '200126', '0705-cfa12b001906', 204, '200126-ab9a69354d5c', NULL, NULL, '200126-9439ca843a84', 'saanjoyjain@gmail.com', 'Payer’s Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '617.00', NULL, NULL, '47.00', NULL, '664.00', 'Advance', NULL, NULL, NULL, '664.00', '111', 'Payer’s Full Name', 'B State, Albania', 'saanjoyjain@gmail.com', NULL, NULL, NULL, 'US$', '1.0000', '664.00', '0', NULL, '1', '0', 664, '664', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-07-05 10:15:43', '2022-07-05 10:24:26'),
(41, NULL, 8, '200127', '0705-33f836b80aea', 204, '200127-9b10ca02e87a', NULL, NULL, '200127-c4c927e8fd3e', 'saanjoyjain@gmail.com', 'yogesh', 'Self', 'demo', 'demo', 'delhi', 'delhi', '110086', 'Albania', '1745874587', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '4747.00', NULL, NULL, '47.00', NULL, '5226.00', 'Advance', NULL, '479.00', NULL, '5226.00', '20', 'yogesh', 'delhi, Albania', 'saanjoyjain@gmail.com', NULL, NULL, 'Credit Card', 'US$', '1.0000', '5226.00', '0', NULL, '1', '0', 5226, '5226', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 5, '2022-07-05 10:29:00', '2022-07-05 10:32:31'),
(42, NULL, 8, '200128', '0705-d6827ee4e34f', 204, '200128-c115c161e24a', NULL, '200128-4c727bbb36ec', '200128-1e6ecee56349', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Self', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Andorra', '22323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '617.00', NULL, '0', '47.00', '0.00', '664.00', 'Advance', NULL, NULL, NULL, '664.00', '111', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '531.00', '0', NULL, '1.2497', '0', -664, '664', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-05 10:34:26', '2022-07-07 11:41:41'),
(43, NULL, 8, '200129', '0705-6684b12743ba', 204, '200129-4cdaa7d15a56', NULL, '200129-a96258c7a8b4', '200129-34397ef24f1f', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Niece', 'D Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '23323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', NULL, NULL, '47.00', '0.00', '1318.00', 'Advance', NULL, '124.00', NULL, '1318.00', '111', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Credit Card', 'USD', '1.0000', '1318.00', '0', NULL, '1', '0', 1318, '1318', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 1, 0, NULL, 5, '2022-07-05 10:36:27', '2022-07-07 05:38:31'),
(44, NULL, 8, '200130', '0707-103936382708', 204, '200130-b42318a7365f', NULL, '200130-dd05cc4dad56', '200130-0410733cfb97', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Niece', 'D Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '23323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '588.00', 'EPAI-3', '35', '47.00', '0.00', '617.00', 'Advance', NULL, '64.00', NULL, '617.00', '100', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'sdfsdfsdf', 'Credit Card', 'USD', '1.0000', '617.00', '0', NULL, '1', '0', 617, '617', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', '2022-07-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, NULL, 5, '2022-07-07 06:42:44', '2022-07-08 06:01:27'),
(45, NULL, 6, NULL, '0707-db19db322e62', 5, NULL, NULL, NULL, NULL, 'demo1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8021.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20', NULL, NULL, 'demo1@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, NULL, 2, '2022-07-07 06:58:21', '2022-07-07 07:18:09'),
(46, NULL, 8, NULL, '0707-a8ed2af5b897', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2 new', 'B City new', 'B State  new', 'B Postal Zip Code', 'Afghanistan', '+11-111(11)-1111', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '617.00', 'EPAI-1', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-07-07 07:08:28', '2022-07-07 07:16:21'),
(47, '200138', 25, '200131', '0707-006835dcf2f6', 5, '200131-cc8b537a5de6', NULL, '200131-0240a01c1740', '200131-9d9d9ac30003', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Husband', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Anguilla', '+9876', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Friend', 'D Address Line 1  NEW', 'D Address Line 2 NEW', 'D City', 'D State', 'D Postal Zip Code L', 'Andorra', '+1-90(89)98761', '2', NULL, NULL, '617.00', 'EPAI-1', '30', '40.00', '0.00', '627.00', 'Advance', NULL, NULL, NULL, '627.00', '100', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '627.00', '0', NULL, '1', '0', 627, '627', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 0, NULL, 0, 1, 0, NULL, 5, '2022-07-07 07:21:01', '2022-07-08 06:38:26'),
(48, '200137', 8, '200132', '0707-ece985e23229', 204, '200132-1c3b49441206', NULL, '200132-a20a553604d2', '200132-bcca3e680c73', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Niece', 'D Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '23323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '5553.00', 'EPAI-2', '45', '47.00', '0.00', '5555.00', 'Advance', NULL, '560.00', NULL, '5555.00', '111', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '4445.00', '0', NULL, '1.2497', '0', -5555, '5555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-07-07 11:34:35', '2022-07-08 06:37:50'),
(49, NULL, 8, '200133', '0707-ce7bf4f45c6a', 204, '200133-e2eb5c6729bd', NULL, '200133-5a9b824f57b9', '200133-bb70861135e4', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', 'EPAI-2', '45', '47.00', '0.00', '1196.00', 'Advance', NULL, NULL, NULL, '1196.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'AU$', '1.5120', '1808.00', '1800', '2022-07-07', '0.6614', '1191', -5, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, '2022-07-08', '2022-07-08', '2022-07-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-07 11:45:37', '2022-07-08 04:59:35'),
(50, NULL, 8, '200134', '0707-e2d32ab117aa', 204, '200134-408e1e117d28', 'ds-us/200134-7b7683c216b6', '200134-6fd2b0df5e2d', '200134-37d5c42b61a1', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'EU€', '0.9491', '1178.00', '1170', '2022-07-08', '1.0536', '1233', -8, '8', NULL, NULL, '2022-07-09', 'DHL', '1763227970', 'https://www.dhl.com/in-en/home/tracking/tracking-express.html?submit=1&tracking-id=1763227970', '2022-07-09', '2022-07-10', '2022-07-11', '2022-07-07', '2022-07-08', NULL, NULL, '2022-07-07', NULL, NULL, NULL, '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', '2022-07-08', NULL, NULL, NULL, '2022-07-08', 'EUR-EU-AW-BCHK', 'BRUDER COSMOGEN LIMITED', NULL, 'AS LHV PANK, Tartu mnt 2, Tallinn 10145, Estonia', NULL, NULL, 'EE987777000063293670', 'SWIFT : LHVBEE22', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-07 11:50:43', '2022-07-08 07:44:27'),
(51, '200130', 8, '200135', NULL, 204, '200135-1263a8e63672', NULL, '200135-b13a9e164d3c', '200135-3e728b87ab14', 'saanjoyjain@gmail.com', 'B Payers Full Name25', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3192.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Bank', 'AU$', '1.5000', '4788.00', '3500', '2022-06-13', '0.6667', '2333', -859, '859', NULL, NULL, '2022-06-14', 'DHL', '1763227970', 'https://www.indiapost.gov.in/_layouts/15/DOP.Portal.Tracking/TrackConsignment.aspx', '2022-06-15', '2022-06-16', '2022-06-17', '2022-06-11', NULL, NULL, NULL, NULL, '2022-06-13', NULL, NULL, NULL, NULL, NULL, '2022-06-13', NULL, '2022-06-13', '2022-06-13', '2022-06-13', NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 06:27:59', '2022-07-08 06:28:44'),
(52, NULL, 8, '200136', NULL, 204, '200136-561a6b77c197', NULL, '200136-59fc601e03e6', '200136-1cf5a642d5ea', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Niece', 'D Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '23323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '5553.00', 'EPAI-2', '45', '47.00', '0.00', '5555.00', 'Advance', NULL, '560.00', NULL, '5555.00', '111', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '4445.00', '0', NULL, '1.2497', '0', -5555, '5555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-08 06:37:20', '2022-07-08 06:37:29'),
(53, '200136', 8, '200137', NULL, 204, '200137-f4eadf735ed0', NULL, '200137-00d4619b1e81', '200137-d2d4254f7271', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Niece', 'D Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Albania', '23323', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '5553.00', 'EPAI-2', '45', '47.00', '0.00', '5555.00', 'Advance', NULL, '560.00', NULL, '5555.00', '111', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '4445.00', '0', NULL, '1.2497', '0', -5555, '5555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 0, NULL, 1, 1, 0, NULL, 5, '2022-07-08 06:37:50', '2022-07-08 06:37:50');
INSERT INTO `14-summary` (`id`, `reorder_invoice_no`, `user_id`, `c_14_2_online_invoice_no`, `c_14_4_cart_url`, `arrival_country`, `c_14_6_proforma_invoice_url`, `shipment_url`, `c_14_7_order_invoice_url`, `c_14_8_excel_order_url`, `c_14_9_login_email`, `c_14_10_payer_full_name`, `c_14_11_patient_relation_payer`, `c_14_12_payer_address_line_1`, `c_14_13_payer_address_line_2`, `c_14_14_pay_city`, `c_14_15_payer_state`, `c_14_16_payer_zip`, `c_14_17_payer_country`, `c_14_18_payer_mobile`, `c_14_19_patient_name`, `c_14_20_patient_sex`, `c_14_21_patient_age`, `c_14_22_parcel_receivers_full_name`, `c_14_23_receiver_relation_patient`, `c_14_24_receiver_address_line_1`, `c_14_25_receiver_address_line_2`, `c_14_26_receiver_city`, `c_14_27_receiver_state`, `c_14_28_receiver_zip`, `c_14_29_receiver_country`, `c_14_30_receiver_mobile`, `c_14_31_end_use_selected`, `c_14_32_doctor_prescription_url`, `c_14_33_undertaking_url`, `c_14_74_total_order_value`, `c_14_75_coupon_code_used`, `c_14_76_promo_discount`, `c_14_77_shipping_charges`, `c_14_78_additional_charges`, `c_14_79_semi_total_amount`, `c_14_80_convert_payment_mode`, `c_14_81_pod_charges`, `c_14_82_credit_card_processing_fees`, `c_14_83_currency_of_order`, `c_14_84_total_amount`, `c_14_85_refil_after_days`, `c_14_86_cc_name`, `c_14_88_cc_state`, `c_14_90_email_address`, `c_14_91_cc_request_details`, `c_14_92_cc_request_link`, `c_14_93_pay_mode`, `c_14_94_forex_currency`, `conversion_usd_to_forex_rate`, `c_14_95_amount`, `c_14_96_forex_received`, `c_14_97_received_on_date`, `c_14_98_conversion_forex_to_usd_rate`, `c_14_99_usd_received`, `forex_gain_loss`, `c_14_100_usd_bal_due`, `c_14_107_payment_received_amount`, `c_14_108_payment_received_date`, `c_14_115_parcel_shipment_date`, `c_14_116_carrier`, `c_14_117_tracking_no`, `c_14_118_tracking_url`, `for_arrival_date`, `customs_cl_date`, `c_14_124_delivered_date`, `proforma_invoice_mail`, `order_invoice_mail`, `order_reminder_or1`, `order_reminder_or2`, `order_reminder_or3`, `cc_payment_reminder_mail1`, `cc_payment_reminder_mail2`, `cc_payment_thanks_mail`, `bt_payment_reminder_mail1`, `bt_payment_reminder_mail2`, `bt_payment_thanks_mail`, `shipment_mail`, `foreign_arrival_mail`, `custom_clearance_mail`, `delivered_mail`, `reviews_mail1`, `reviews_mail2`, `refil_reminder_mail1`, `refil_reminder_mail2`, `refil_reminder_mail3`, `order_hold_mail`, `bank_company_code`, `bank_account_name`, `bank_account_address`, `bank_name_location`, `bank_branch_code`, `account_type`, `account_no`, `bank_transfer_code`, `bank_email`, `is_pdf`, `deleted_at`, `is_old`, `is_order`, `is_reorder`, `reorder_date`, `checkout_step`, `created_at`, `updated_at`) VALUES
(54, '200139', 25, '200138', NULL, 5, '200138-5b6b0aee7164', 'ds-uk/200138-2a1ef4e852ca', '200138-e895d511560d', '200138-c01be6ef1a1d', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Husband', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Anguilla', '+9876', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Friend', 'D Address Line 1  NEW', 'D Address Line 2 NEW', 'D City', 'D State', 'D Postal Zip Code L', 'Andorra', '+1-90(89)98761', '2', NULL, NULL, '617.00', 'EPAI-1', '30', '40.00', '0.00', '627.00', 'Advance', NULL, NULL, NULL, '627.00', '100', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '627.00', '0', NULL, '1', '0', 627, '627', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 06:38:26', '2022-07-08 08:04:48'),
(55, NULL, 25, '200139', NULL, 5, '200139-cc246cc8891d', 'ds-au/200139-ab4960261cb7', '200139-78f673ea21e3', '200139-8a3bf4ffbfbf', 'saanjoyjain@gmail.com', 'B Payer’s Full Name', 'Husband', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Anguilla', '+9876', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Friend', 'D Address Line 1  NEW', 'D Address Line 2 NEW', 'D City', 'D State', 'D Postal Zip Code L', 'Andorra', '+1-90(89)98761', '2', NULL, NULL, '617.00', 'EPAI-1', '30', '40.00', '0.00', '627.00', 'Advance', NULL, NULL, NULL, '627.00', '100', 'B Payer’s Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '627.00', '0', NULL, '1', '0', 627, '627', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 08:04:48', '2022-07-08 08:31:11'),
(56, NULL, 8, '200140', NULL, 204, '200140-ab1f8ca28d95', 'ds-us/200140-c31e6a33eca3', '200140-f7b8c2649441', '200140-325c5dd90bd1', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'EU€', '0.9491', '1178.00', '0', '2022-07-08', '1.0536', '0', -1241, '1241', NULL, NULL, NULL, NULL, '1763227970', NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'EUR-EU-AW-BCHK', 'BRUDER COSMOGEN LIMITED', NULL, 'AS LHV PANK, Tartu mnt 2, Tallinn 10145, Estonia', NULL, NULL, 'EE987777000063293670', 'SWIFT : LHVBEE22', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-08 08:46:45', '2022-07-08 09:10:12'),
(57, '200130', 8, '200141', NULL, 204, '200141-b9ba3b28d364', NULL, '200141-23327e6b0f39', '200141-a05786de774a', 'saanjoyjain@gmail.com', 'B Payers Full Name25', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3192.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Bank', 'AU$', '1.5000', '4788.00', '0', NULL, '0.6667', '0', 3192, '7182', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 09:19:12', '2022-07-08 09:19:30'),
(58, '200130', 8, '200142', NULL, 204, '200142-96a64d4e32fe', NULL, '200142-5b7e0c2e7e2f', '200142-2a76063e8368', 'saanjoyjain@gmail.com', 'B Payers Full Name25', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3192.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Bank', 'AU$', '1.5000', '4788.00', '4700', '2022-07-08', '0.6667', '3133', -59, '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 09:22:39', '2022-07-08 09:33:40'),
(59, '200130', 8, '200143', NULL, 204, '200143-5c12a5054d83', NULL, '200143-5ccade89f25a', '200143-5117f9b73b97', 'saanjoyjain@gmail.com', 'B Payers Full Name25', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Name', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200108-dccddb0dba72.pdf', NULL, '3142.00', NULL, '0', '50.00', '0.00', '3192.00', 'Advance', NULL, '319.00', NULL, '3192.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, 'https://checkout.airwallex.com/#/pay/hk/694777a', 'Bank', 'AU$', '1.5000', '4788.00', '0', NULL, '0.6667', '0', 3192, '3192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 0, 1, 0, NULL, 5, '2022-07-08 09:47:04', '2022-07-08 09:47:04'),
(60, NULL, 8, '200144', NULL, 204, '200144-5b0d7fda44bd', 'ds-us/200144-5585b7d3dfdc', '200144-f2f441bf408a', '200144-f3d1807ee7e2', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'AU$', '1.5120', '1876.00', '1870', '2022-07-08', '0.6614', '1237', -4, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', '2022-07-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-08 09:50:43', '2022-07-08 09:57:56'),
(61, NULL, 8, '200145', NULL, 204, '200145-e416e1ee7f02', NULL, '200145-98a9e3f55b1d', '200145-940b6229ccab', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Brother', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Argentina', '+11-111(11)-1111', 'D Patient’s Full Names', 'M', '33', 'D Parcel Receiver’s Name', 'Daughter', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '662.00', NULL, NULL, '50.00', '0.00', '712.00', 'Advance', NULL, NULL, NULL, '712.00', '111', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', '1.0000', '712.00', '0', NULL, '1', '0', 712, '712', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-08 10:01:15', '2022-07-08 10:02:28'),
(62, NULL, 8, '200146', NULL, 204, '200146-71108378938b', 'ds-us/200146-f26b05091f29', '200146-e86e6f909098', '200146-b9f5ef7a94d2', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'AU$', NULL, '1876.00', '0', NULL, '0.6614', '0', NULL, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-08 10:55:03', '2022-07-08 10:55:05'),
(63, NULL, 8, NULL, '0713-88c7fd5106e6', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '1194.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-07-13 06:38:31', '2022-07-13 06:41:08'),
(64, NULL, 8, '200147', '0714-f523a8438cda', 204, '200147-7a7b808ddf20', 'ds-uk/200147-18303fc2588a', '200147-29166d755a55', '200147-bc5641ff187e', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', '200147-b4798a39243b.jpg', NULL, '22810.00', NULL, '0', '47.00', '0.00', '22857.00', 'Advance', NULL, NULL, NULL, '22857.00', '100', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'AU$', NULL, '34560.00', '34000', '2022-07-14', '0.6614', '22488', NULL, '370', NULL, NULL, '2022-07-15', 'DHL', '1254587', 'www.google.com', '2022-07-15', '2022-07-16', '2022-07-17', '2022-07-14', '2022-07-14', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', NULL, NULL, NULL, '2022-07-14', 'AUD-AU-OFX-BCHK', 'OzForex Limited Re: BRUDER COSMOGEN LIMITED', 'Level 19, 60 Margaret Street  Sydney NSW 2000', 'BANK OF AMERICA, N.A. SYDNEY, Level 37, Governor Philip Tower, 1 Farrer Place, SYDNEY, NSW, 2000, Australia', NULL, 'Current', '639100745', 'BSB Code : 232-001 SWIFT : BOFAAUSXXXX', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-14 12:22:50', '2022-07-17 13:03:28'),
(65, NULL, 8, '200152', '0719-b871a5b39da0', 204, '200152-55c3242b3c7c', 'ds/200152-3f6c8f26c104', '200152-faf6568ecd2b', '200152-df8aeba02eb5', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200152-1421a3532977.jpg', NULL, '1194.00', NULL, NULL, '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', NULL, '1241.00', '0', NULL, '1', '0', NULL, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-18 23:57:56', '2022-07-22 02:43:40'),
(66, NULL, 8, '200151', '0719-745bffbcdb77', 204, '200151-c22c7f14db62', 'ds/200151-74aa4a5acb05', '200151-b44714e71fb6', '200151-996234e092e4', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '2', NULL, NULL, '617.00', NULL, NULL, '47.00', '0.00', '664.00', 'Advance', NULL, NULL, NULL, '664.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', NULL, '664.00', '0', NULL, '1', '0', NULL, '664', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-19 00:30:38', '2022-07-22 02:25:18'),
(67, NULL, 8, NULL, '0722-e53879b484f0', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', NULL, NULL, NULL, '2388.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 4, '2022-07-22 00:58:00', '2022-07-22 01:11:51'),
(68, NULL, 8, '200152', NULL, 204, '200152-b24542556005', 'ds/200152-a482236a49e1', '200152-4929e47f3995', '200152-30d1c3031dc6', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200152-1421a3532977.jpg', NULL, '1194.00', NULL, NULL, '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', NULL, '1241.00', '0', NULL, '1', '0', 1241, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-22 02:43:30', '2022-07-22 02:43:30'),
(69, NULL, 8, '200153', NULL, 204, '200153-5bb76b623c5c', 'ds/200152-3f6c8f26c104', '200153-b04973d3cb0b', '200153-79f96b09b89a', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200152-1421a3532977.jpg', NULL, '1194.00', NULL, NULL, '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'US$', NULL, '1241.00', '0', NULL, '1', '0', 1241, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD-HK-AW-BCHK', 'BRUDER COSMOGEN LIMITED', 'MULTIFIELD PLAZA, 3 PART AVE., TST, HONG KONG', 'Standard Chartered Bank, 32nd Floor, 4-4A Des Voeux Road Central, Hong Kong (China), Hong Kong', '003-474', 'Checking', '47417776885', 'SWIFT : SCBLHKHH', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-22 02:43:59', '2022-07-22 02:43:59'),
(70, NULL, 8, '200154', NULL, 204, '200154-f31549293cb8', 'ds/200154-6b95d2f4046a', '200154-4ee13d30205e', '200154-a23c24ab5c70', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200152-1421a3532977.jpg', NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', NULL, '993.00', '0', NULL, '1.2497', '0', NULL, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-22 02:47:57', '2022-07-22 02:59:01'),
(71, NULL, 8, '200155', NULL, 204, '200155-e34e0345af4d', 'ds/200155-813bd0fad803', '200155-054f75755bf9', '200155-0fb588a4a788', 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', 'UK', '+1-90(89)98761', '1', '200152-1421a3532977.jpg', NULL, '1194.00', NULL, '0', '47.00', '0.00', '1241.00', 'Advance', NULL, NULL, NULL, '1241.00', '10', 'B Payers Full Name', 'saanjoyjain@gmail.com', 'saanjoyjain@gmail.com', NULL, NULL, 'Bank', 'GB£', '0.8002', '993.00', '0', NULL, '1.2497', '0', NULL, '1241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GBP-UK-OFX-BCHK', 'UKForex Ltd. Re: BRUDER COSMOGEN LIMITED', '4th Floor, 10 Whitechapel High St London E1 8QS, UK', 'Bank of America N.A., 2 King Edward Street, London, EC1A 1HQ, United Kingdom', NULL, 'Current', '01101687', 'UK Sort Code : 300231', 'brudercosmogen.hk@gmail.com', 1, NULL, 1, 1, 0, NULL, 5, '2022-07-22 02:57:37', '2022-07-22 03:04:40'),
(72, NULL, 8, NULL, '0722-28a932d9a774', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', '204', '+1-90(89)98761', NULL, NULL, NULL, '617.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 2, '2022-07-22 07:29:14', '2022-07-22 07:29:14'),
(73, NULL, 8, NULL, '0722-a976ee3798d4', 204, NULL, NULL, NULL, NULL, 'saanjoyjain@gmail.com', 'B Payers Full Name', 'Niece', 'B Address Line 1', 'B Address Line 2', 'B City', 'B State', 'B Postal Zip Code', 'Angola', '+9876', 'Sanjay Jain', 'M', '54', 'Sahil Jain', 'Son', 'D Address Line 1', 'D Address Line 2', 'D City', 'D State', 'D Postal Zip Code', '204', '+1-90(89)98761', NULL, NULL, NULL, '617.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, 'saanjoyjain@gmail.com', NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, NULL, 2, '2022-07-22 07:39:28', '2022-07-22 07:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arhamconsultants@gmail.com', 'arhamconsultants@gmail.com', 'asdfasdfa', 1, NULL, NULL, '2022-07-16 10:33:44'),
(9, 'yogesh@gmail.com', 'yogesh@gmail.com', 'asdfasdfa', 0, NULL, '2022-07-05 05:17:58', '2022-07-16 10:34:25'),
(10, 'samyak@gmail.com', 'samyak@gmail.com', 'asdfasdfa', 0, NULL, '2022-07-05 05:35:42', '2022-07-16 10:38:08'),
(11, 'Sahil@gmail.com', 'Sahil@gmail.com', 'asdfasdfa', 0, NULL, '2022-07-16 10:35:31', '2022-07-16 10:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logins`
--

CREATE TABLE `admin_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_news`
--

CREATE TABLE `blog_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_news_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posted_or_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title_h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_url_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browsing_path_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hyperlink_page_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium_image_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_icon_alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_news` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_introduction` longtext COLLATE utf8mb4_unicode_ci,
  `full_information` longtext COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robots` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revisit_after` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_tag_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_tag_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_tag_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_news`
--

INSERT INTO `blog_news` (`id`, `blog_news_no`, `posted_source`, `posted_or_source`, `date`, `source_url`, `blog_title_h1`, `page_url_name`, `browsing_path_name`, `hyperlink_page_tag`, `big_image`, `big_image_alt_tag`, `medium_image`, `medium_image_alt_tag`, `image_icon`, `image_icon_alt_tag`, `home_page`, `blog_news`, `medication`, `brief_introduction`, `full_information`, `meta_title`, `meta_description`, `meta_keyword`, `canonical`, `language`, `country`, `distribution`, `author`, `robots`, `revisit_after`, `rating_value`, `rating_count`, `other_tag_3`, `other_tag_4`, `other_tag_5`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Posted By', 'Yogesh', NULL, NULL, 'New Promote Your Business with Custom Made Flags', 'prodmote-your-business', 'Promote Your Business with Custom Made Flags', 'Promote Your Business with Custom Made Flags', 'BL-108 Big.jpg', 'Promote Your Business with Custom Made Flags', 'BL-108 Medium.jpg', 'Promote Your Business with Custom Made Flags', 'BL-108 Icon.jpg', 'Promote Your Business with Custom Made Flags', '1', '1', NULL, 'New - Chronic Myeloid Leukemia or CML forms from the clonal expansion of stem cells (pluripotent hematopoietic) that contains an active fusion gene / protein known as BCR/ABL', '<p>Marketing and advertisement have gone through a lot of evolution. New techniques are used to reach maximum people within a short time to grow a business. Custom made flags have the power to capture the passersby&rsquo;s attention.</p>\r\n\r\n<p>Custom made flags are used for celebration and to welcome customers. The colorful flag will help to trigger some positive emotion in the customers, and they will start to recognize the brand&rsquo;s logo.</p>\r\n\r\n<div class=\"font20 mb-2\"><strong>How Custom Made Flags Are Useful In Business Promotions </strong></div>\r\n\r\n<ul>\r\n	<li><strong>Unique Element: </strong>Every business is trying to incorporate new ways to promote their business and hence having a different advertising style will help a business to stand out and make people recognize the brand. There are several advertising options like hoarding, banners etc. One can say that custom made flags are newly added in this list.</li>\r\n	<li><strong>Attractive:</strong> Custom made flags are beautiful and bright, so you can place it on the storefront or near the crossroad&rsquo;s intersection. The flags will move in the breeze and is a great way to grab the attention of the passerby. Flags can easily capture anyone&rsquo;s attention, and hence they will look into the advertisement made through the flags.</li>\r\n</ul>\r\n\r\n<p>According to <a href=\"https://www.entrepreneur.com/article/233961\">https://www.entrepreneur.com</a>, 64% of small businesses focus on creative signage and graphics.</p>\r\n\r\n<ul>\r\n	<li><strong>Economical: </strong>Acustom made flag is available at a low price and can be made as per your preference. The material, size, color, design and layout can be customized according to your requirement.</li>\r\n</ul>\r\n\r\n<p>You can also ask the professionals to provide you with the idea of creating a professional customized flag that will compliment your business. With the help of an advertising agency, one will be able to proceed with the flag having the perfect layout.</p>\r\n\r\n<ul>\r\n	<li><strong>Positive Image: </strong><a href=\"https://www.bannerbuzz.com/rectangle-flags/p\">Custom made flags</a> comes with long-term utilization at a minimum cost. You can use this flag for recurring events and create a positive business image. When a marching band or a music band wants to grab the attention of the crowd, they always use a billowing, bold and bright flag. Flags are used to symbolize joyful and welcoming emotions.</li>\r\n	<li><strong>Logo: </strong>Custom made flag is going to indicate the type of work that a business deals with. After creating an eye-catching flag design, you need a great logo that is going to become the symbol of the company.</li>\r\n</ul>\r\n\r\n<p>The primary aim of flags is to evoke the happy memories in the subconscious mind of the customers. A large and attractive flag with an engaging logo will do the promotion effortlessly.</p>\r\n\r\n<ul>\r\n	<li><strong>Give A Twist: </strong>Even though flags are an old advertising method still, you can give it a modern touch. Custom made flags have good quality, and you can also collaborate with the advertising companies to include a lot of detailing in the flags.</li>\r\n	<li><strong>Brighten Up The Outdoor Space: </strong>Small elements can help to promote a business in several ways. One can place the bold and bright flying flag in the storefront to brighten up the outer space. The moving flag with a catching logo will signify that the customers have reached your shop front.</li>\r\n</ul>\r\n\r\n<p><strong>Conclusion </strong></p>\r\n\r\n<p>Custom made flags can help you to jump-start your sales, and you can use it anytime and anywhere. They create a festive and fun atmosphere and make your product look unique and versatile. When you place the custom flag strategically, then it will help you to boost the traffic in the store.</p>', 'BL-1 : New Promote Your Business with Custom Made Flags', 'BL-1 : New Promote Your Business with Custom Made Flags', 'BL-1 : New Promote Your Business with Custom Made Flags', NULL, 'English', 'India', 'Global', '911GlobalMeds.com, WeCare@911GlobalMeds.com', 'index, follow', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 05:18:40', '2022-07-20 04:08:05'),
(3, '1', 'posted', NULL, NULL, NULL, 'H1 Pro', 'Hello', NULL, NULL, '', NULL, '', NULL, '', NULL, '0', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 08:46:32', '2022-07-06 08:45:18', '2022-07-06 08:46:32'),
(4, '2', 'Source', 'Selleck Chem', '2022-07-20', 'https://www.selleckchem.com/blog/SORAFENIB-A-MULTIKINASE-TYROSINE-INHIBITOR.html?pathway=logical_Angiogenesis_Tyrosine-Kinase', 'SORAFENIB- A MULTIKINASE TYROSINE INHIBITORS', 'SORAFENIB-A-MULTIKINASE-TYROSINE-INHIBITOR', 'BPN : SORAFENIB- A MULTIKINASE TYROSINE INHIBITOR', 'aaa, bbb, ccc', 'BL-109 Big.jpg', 'Image - Big Alt Tag', 'BL-109 Medium.jpg', 'Image - Medium Alt Tag', 'BL-109 Icon.jpg', 'Image - Icon Alt Tag', '1', '1', '108', 'Various kinds of non-receptor tyrosine kinases or receptor tyrosine kinases (RTKs) are available in the cells which are employed in responding to intra or extracellular stimul', '<p><strong>SORAFENIB: INTRODUCTION</strong></p>\r\n\r\n<p>Various kinds of non-receptor tyrosine kinases or receptor tyrosine kinases (RTKs) are available in the cells which are employed in responding to intra or extracellular stimulusby carrying out either initiatory or inhibitory action on various signaling pathways. Any sort of problem in this process may cause cancer. Inhibition of kinase enzymes to prevent some mal-expressed or over-expressed gene causing cancer is found to be an effective tool. Inhibition of various kinases is being done by using single inhibitor. Since malfunctioned tyrosine kinases are involved in onset of cancer, research is being done on their inhibitors for cancer therapy.Many of them are giving promising results in their clinical trials.An important example of these inhibiting drugs is&nbsp;<a href=\"http://www.selleckchem.com/products/Sorafenib-Tosylate.html\"><u><strong>Sorafenib VEGFR inhibitor&nbsp;</strong></u></a>that has been found to inhibit the protein kinases except respective VEGFR. When&nbsp;<a href=\"http://www.selleckchem.com/products/Sorafenib-Tosylate.html\"><u><strong>Sorafenib Raf inhibitor&nbsp;</strong></u></a>was given Raf/MEK/ERK pathway was found inhibited.</p>\r\n\r\n<p>Bayer and Onyx are well known pharmaceutical companies which are producing&nbsp;<a href=\"http://www.selleckchem.com/products/Sorafenib-Tosylate.html\"><strong>Sorafenib PDGFR inhibitor</strong></a>.&nbsp;<strong>Sorafenib structure&nbsp;</strong>revealed that it contained bi-aryl urea derivative and commercially available as Bay 43-9006. Sorafenib is supplied by&nbsp;<strong>Sorafenib supplier&nbsp;</strong>at the rate of $88 per 500mg vial to researchers or scientists who want to&nbsp;<strong>buy Sorafenib</strong>.&nbsp;<strong>Sorafenib solubility&nbsp;</strong>was found to be good in DMSO and is up to 200 mg/mL while it is completely insoluble in ethanol and water. Sorafenib can be stable even for two years when stored under -20 &deg;C. For the inhibition of mutant B-Rafwt, B-RafV599E and Raf-, Sorafenib IC50 is observed to be 22, 38 and 6 nM respectively. To unleashmore properties of this drug, huge research is being made.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PRECLINICAL AND CLINICAL TRIALS OF SORAFENIB</strong><br />\r\nDifferent pre-clinical and clinical trials are being conducted on&nbsp;<a href=\"http://www.selleckchem.com/products/Sorafenib-Tosylate.html\"><u><strong>Sorafenib Nexavarfor&nbsp;</strong></u></a>treatment of various cancers. Prolonged survival and regression was seen in renal cancer cells when treated with Sorafenib ERK inhibitor [1].A strategy was employed in case of renal cell carcinoma which involves surgery, chemo and radiotherapy by using Sorafenib MEK inhibitor and these combinational therapies resulted in synergistic effects [2]. When given to hepatocellular carcinoma patients survival rate was seen increased [3].When used against the patients of medullary thyroid cancer or MTC either sporadic or metastatic under clinical trials phase II, it gave 85% promising results [4].In case of androgen free prostate cancer patients Sorafenib gave exactly similar results [5]. Sorafenib has been used in combination with some other medicines like Gefitinib, Paclitaxel-Carboplatin and Doxorubicin against solid tumor patients of NSCLC, melanoma and hepatocellular carcinoma, and very low toxicity level and good efficiency was observed [6].</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CLINICAL USE OF SORAFENIB</strong></p>\r\n\r\n<p>Sorafenib got approval for therapy of RCC and HCC. In 2005 and 2008 it got approved by FDA for RCC and HCC respectively. The marketing approval against renal cancer was gained in 2006 while against HCC was gained in 2007. Sorafenib clinical trials were carried for its use in combination with some other drugs for recurrent kinds of tumours like GBM or Glioblastoma. So it was administered with Temsirolimus in phase I and II trials. Non-responsive patients suffering from thyroid cancer were treated with it in clinical trials phase II.&nbsp; National Cancer Institute as known as NCI is also carrying out a phase II study against after menopause-metastatic breast cancer patients to check the synergistic effects of Sorafenib and Anastrozole. In phase II non-small cell lung cancer patients who showed resistance to EGFR inhibitor were treated with Sorafenib and reported by Chinese research society.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>REFERENCES:</strong><br />\r\n1. Escudier, B.e.a., Sorafenib in advanced clear-cell renal-cell carcinoma. N. Engl. J. Med., 2007.<br />\r\n2. Walid, M.S.a.J., K.W., Successful treatment of a brain-metastasized renal cell carcinoma. Ger Med Sci, 2009.<br />\r\n3. Keating, G.M.a.S.A., Sorafenib: A Review of its Use in Advanced Hepatocellular Carcinoma. Drugs, 2009.<br />\r\n4. Lam, E.T.e.a., Phase II clinical trial of sorafenib in metastatic medullary thyroid cancer. J Clin Oncol., 2010.<br />\r\n5. Dahut, W.L.e.a., A Phase II Clinical Trial of Sorafenib in Androgen-Independent Prostate Cancer. Clin Cancer Res, 2008.<br />\r\n6. Takimoto, C.H.a.A., A. et al, Safety and anti-tumor activity of sorafenib (Nexavar&reg;) in combination with other anti-cancer agents: a review of clinical trials. Cancer Chemotherapy and Pharmacology, 2008.</p>', 'Meta Title', 'Meta Description', 'Meta Keyword', NULL, 'Language', 'Country', 'Distribution', 'Author', 'Robots', '15', '25', '50', NULL, NULL, NULL, NULL, '2022-07-20 03:26:27', '2022-07-21 01:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `blog_reviews`
--

CREATE TABLE `blog_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_on_blog` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_reviews`
--

INSERT INTO `blog_reviews` (`id`, `fullname`, `country`, `email`, `comment`, `post_on_blog`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Yogesh', 'India', 'arhamconsultantsarhamconsultants@gmail.com', 'this is demo arhamconsultants', 1, 1, NULL, '2022-07-12 08:56:02', '2022-07-12 09:21:51'),
(2, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'Comment 2', 1, 1, NULL, '2022-07-12 09:40:12', '2022-07-12 09:40:26'),
(3, 'arun p', 'Canada', 'arun@gmail.com', 'Good Blog', 4, 1, NULL, '2022-07-21 04:46:33', '2022-07-21 04:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_34_medicine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_35_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_36_quantity_pack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_37_net_price_pack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_38_no_of_packs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_39_total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_41_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('add','initated','placed','delete') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `cart_id`, `user_id`, `c_14_34_medicine_no`, `c_14_35_description`, `c_14_36_quantity_pack`, `c_14_37_net_price_pack`, `c_14_38_no_of_packs`, `c_14_39_total_quantity`, `c_14_41_total_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bcda85fd5b2d72a293612fa489895b93', NULL, '109', 'Paliperidone Palmitate ER 1.5 mg Tablets ( Generic of Invega Sustenna )', '30-1', '9450', '1', '9450', '9450', 'add', '2022-04-28 06:46:08', '2022-04-28 06:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `critical_medicines`
--

CREATE TABLE `critical_medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `critical_disease_id` int(11) NOT NULL,
  `generic_med_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `critical_medicines`
--

INSERT INTO `critical_medicines` (`id`, `critical_disease_id`, `generic_med_no`, `created_at`, `updated_at`) VALUES
(31, 2, 113, '2022-06-01 04:52:02', '2022-06-01 04:52:02'),
(32, 2, 108, '2022-06-01 04:52:02', '2022-06-01 04:52:02'),
(33, 2, 109, '2022-06-01 04:52:02', '2022-06-01 04:52:02'),
(34, 2, 112, '2022-06-01 04:52:03', '2022-06-01 04:52:03'),
(35, 2, 114, '2022-06-01 04:52:03', '2022-06-01 04:52:03'),
(42, 1, 113, '2022-07-20 02:05:00', '2022-07-20 02:05:00'),
(43, 1, 109, '2022-07-20 02:05:00', '2022-07-20 02:05:00'),
(44, 1, 110, '2022-07-20 02:05:00', '2022-07-20 02:05:00'),
(45, 1, 111, '2022-07-20 02:05:00', '2022-07-20 02:05:00'),
(46, 1, 112, '2022-07-20 02:05:00', '2022-07-20 02:05:00'),
(47, 1, 114, '2022-07-20 02:05:00', '2022-07-20 02:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `type`, `question_no`, `question`, `answer`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'order', 1, 'Personal Information And Choice', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-06-27 08:21:32'),
(2, 'general_medication', 1, 'Personal Information And Choice2', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-06-27 11:16:12'),
(3, 'medication_ordering', 1, 'Personal Information And Choice', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-06-27 08:21:32'),
(4, 'branded_medication', 1, 'FAQs – FAQs for Branded Medication Qs', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>FAQs &ndash; FAQs for Branded Medication Ans</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-07-08 07:25:17'),
(5, 'online', 1, 'Personal Information And Choice', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-06-27 08:21:32'),
(6, 'branded_and_generic', 1, 'Personal Information And Choice', '<div class=\"collapse show\" id=\"collapse1\">\r\n<div class=\"card-body\">\r\n<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>\r\n</div>\r\n</div>', 1, NULL, '2022-06-27 08:21:32', '2022-06-27 08:21:32'),
(7, 'order', 2, 'hello', '<p>Bye</p>', 1, NULL, '2022-07-01 06:47:59', '2022-07-01 06:47:59'),
(8, 'order', 1, 'Hi', 'Bye', 1, NULL, '2022-07-08 06:54:48', '2022-07-08 06:55:13'),
(9, 'general_medication', 1, 'FAQs for Generic Medication Qs', '<p>FAQs for Generic Medication Ans</p>', 1, NULL, '2022-07-08 07:09:49', '2022-07-08 07:24:50'),
(10, 'medication_ordering', 1, 'FAQs – FAQs for Medication Ordering Qs', '<p>FAQs &ndash; FAQs for Medication Ordering Ans</p>', 1, NULL, '2022-07-08 07:13:30', '2022-07-08 07:25:02'),
(11, 'branded_medication', 1, 'Personal Information And Choice', '<p>&quot;Personal Information&quot; Is Information About A Person That Identifies Or Describes An Individual, Including, But Not Limited To, His Or Her Name, Physical Description, Home Address, Telephone Number, Financial Matters, And Medical History, Readily Identifiable To That Specific Individual. An Internet Protocol (IP) Address Is Not Considered Personal Information; However, It Is Considered &quot;Electronically Collected Personal Information.&quot;</p>\r\n\r\n<p>&quot;Electronically Collected Personal Information&quot; We Automatically Collect Your Computer&rsquo;s (Or Network&rsquo;s) IP Address And Statistical Information About Which Web Pages You Visit. If You Voluntarily Participate In An Activity That Asks For Specific Information (E.G., Completing A Request For Assistance, Personalizing The Content Of The Web Site, Sending An E-Mail, Or Participating In A Survey,&hellip;Etc), More Detailed Data Will Be Collected. If You Choose Not To Participate In These Activities, Your Choice Will In No Way Affect Your Ability To Use Any Other Feature Of The Web Site.</p>', 1, NULL, '2022-07-08 07:15:36', '2022-07-08 07:15:36'),
(12, 'online', 2, 'FAQs for Online Pharmacy Qs', '<p>FAQs for Online Pharmacy Ans<p>', 1, NULL, '2022-07-08 07:16:10', '2022-07-08 07:16:10'),
(13, 'branded_and_generic', 2, 'FAQs – Brand vs Generics Qs', '<p>FAQs &ndash; Brand vs Generics Ans</p>', 1, NULL, '2022-07-08 07:21:11', '2022-07-08 07:21:11'),
(14, 'who', 1, 'Question  no. 1', '<p>Answer&nbsp; no.&nbsp; 1</p>', 1, NULL, '2022-07-22 06:38:11', '2022-07-22 06:40:03'),
(15, 'who', 2, 'Question 2', '<p>Answer 2</p>', 1, NULL, '2022-07-22 06:39:19', '2022-07-22 06:39:19'),
(16, 'who', 3, 'Question 3', '<p>Answer 3</p>', 1, NULL, '2022-07-22 06:39:46', '2022-07-22 06:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `faq_titles`
--

CREATE TABLE `faq_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_titles`
--

INSERT INTO `faq_titles` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `created_at`, `updated_at`) VALUES
(1, 'How to Orders', 'Generic Medication', 'Medication Ordering', 'Branded Medication', 'Demo', NULL, '2022-07-22 06:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `forget_passwords`
--

CREATE TABLE `forget_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_medicines`
--

CREATE TABLE `general_medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_disease_id` bigint(20) NOT NULL,
  `generic_med_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_medicines`
--

INSERT INTO `general_medicines` (`id`, `general_disease_id`, `generic_med_no`, `created_at`, `updated_at`) VALUES
(7, 5, 113, '2022-06-01 04:54:00', '2022-06-01 04:54:00'),
(8, 5, 108, '2022-06-01 04:54:00', '2022-06-01 04:54:00'),
(9, 5, 110, '2022-06-01 04:54:00', '2022-06-01 04:54:00'),
(10, 5, 111, '2022-06-01 04:54:00', '2022-06-01 04:54:00'),
(11, 5, 114, '2022-06-01 04:54:00', '2022-06-01 04:54:00'),
(36, 1, 108, '2022-07-21 01:19:34', '2022-07-21 01:19:34'),
(37, 1, 109, '2022-07-21 01:19:34', '2022-07-21 01:19:34'),
(38, 1, 111, '2022-07-21 01:19:34', '2022-07-21 01:19:34'),
(39, 1, 112, '2022-07-21 01:19:34', '2022-07-21 01:19:34'),
(40, 1, 114, '2022-07-21 01:19:34', '2022-07-21 01:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `meds_keywords`
--

CREATE TABLE `meds_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generic_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontend_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meds_keywords`
--

INSERT INTO `meds_keywords` (`id`, `generic_id_no`, `generic_name`, `other_names`, `frontend_url`, `created_at`, `updated_at`) VALUES
(5, '109', 'Paliperidone Palmitate', 'Invega', 'buy-paliperidone-palmitate-invega-online', '2022-06-15 16:51:51', '2022-06-15 16:51:51'),
(6, '110', 'Palonosetron', 'Aloxi', 'buy-palonosetron-aloxi-online', '2022-06-15 16:52:02', '2022-06-15 16:52:02'),
(7, '112', 'Pancreatin', 'Creon', 'buy-pancreatin-creon-zenpep-online', '2022-06-15 16:52:36', '2022-06-15 16:52:36'),
(8, '112', 'Pancreatin', 'Zenpep', 'buy-pancreatin-creon-zenpep-online', '2022-06-15 16:52:36', '2022-06-15 16:52:36'),
(9, '113', 'ewrewrwe', 'fgdfgs', 'erwerewr', '2022-06-15 16:53:32', '2022-06-15 16:53:32'),
(14, '111', 'Pamidronate Disodium', 'Aredia', 'buy-pamidronate-disodium-aredia-online', '2022-06-17 06:06:19', '2022-06-17 06:06:19'),
(16, '108', 'Palbociclib', 'Ibrance', 'buy-palbociclib-ibrance-palbace-online', '2022-06-17 17:35:48', '2022-07-20 01:42:27'),
(17, '108', 'Palbociclib', 'Palbace', 'buy-palbociclib-ibrance-palbace-online', '2022-06-17 17:35:48', '2022-07-20 01:42:27'),
(18, '108', 'Palbociclib', 'Albace', 'buy-palbociclib-ibrance-palbace-online', '2022-06-23 06:24:03', '2022-07-20 01:42:27'),
(19, '114', 'Panobinostat', 'Farydak', 'buy-panobinostat-farydak-ixapana-online', '2022-07-04 05:32:55', '2022-07-21 01:20:40'),
(20, '114', 'Panobinostat', 'Ixapana', 'buy-panobinostat-farydak-ixapana-online', '2022-07-04 05:32:55', '2022-07-21 01:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_11_074855_create_admin_logins_table', 1),
(5, '2022_04_12_050233_create_forget_passwords_table', 2),
(6, '2022_04_13_064034_create_generic_medicines_table', 3),
(7, '2022_04_13_114656_create_contacts_table', 4),
(16, '2022_04_14_063118_create_meds_infos_table', 5),
(17, '2022_04_14_064517_create_meds_questions_table', 5),
(18, '2022_04_14_064538_create_meds_leaflets_table', 5),
(19, '2022_04_14_064556_create_meds_videos_table', 5),
(21, '2022_04_15_124951_create_meds_seos_table', 6),
(28, '2022_04_16_062653_create_meds_products_table', 7),
(29, '2022_04_16_062805_create_meds_prices_table', 7),
(30, '2022_04_16_062819_create_meds_forexes_table', 7),
(37, '2022_04_19_072241_create_home_headers_table', 8),
(38, '2022_04_19_072315_create_home_main_bodies_table', 8),
(39, '2022_04_19_072417_create_home_general_diseases_table', 8),
(40, '2022_04_19_072455_create_home_critical_diseases_table', 8),
(41, '2022_04_19_072524_create_home_qas_table', 8),
(42, '2022_04_19_072552_create_home_seos_table', 8),
(43, '2022_04_22_072138_create_query_details_table', 9),
(44, '2022_04_27_105332_create_country_freights_table', 10),
(45, '2022_04_28_063546_create_promo_discounts_table', 11),
(46, '2022_04_28_083029_create_bank_details_table', 12),
(49, '2022_04_28_102732_create_summaries_table', 13),
(50, '2022_04_28_105242_create_order_details_table', 13),
(51, '2022_04_28_114457_create_cart_details_table', 14),
(52, '2022_05_18_045438_create_admins_table', 15),
(53, '2022_05_30_054350_create_general_medicines_table', 16),
(54, '2022_05_30_054426_create_critical_medicines_table', 16),
(55, '2022_06_01_092237_create_permission_tables', 17),
(56, '2022_06_08_110608_create_blog_news_table', 18),
(57, '2022_06_10_090450_create_text_reviews_table', 19),
(59, '2022_06_10_121220_create_video_reviews_table', 20),
(60, '2022_06_11_102226_create_blog_reviews_table', 21),
(62, '2022_06_14_073837_create_faqs_table', 22),
(63, '2022_06_15_153620_create_meds_keywords_table', 23),
(64, '2022_07_22_092241_create_faq_titles_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 6),
(2, 'App\\Models\\Admin', 7),
(3, 'App\\Models\\Admin', 8),
(4, 'App\\Models\\Admin', 9),
(5, 'App\\Models\\Admin', 10),
(6, 'App\\Models\\Admin', 11);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `med_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_34_medicine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_35_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_36_quantity_pack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_37_net_price_pack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_38_no_of_packs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_39_total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_14_40_medicine_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_14_41_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `cart_id`, `order_id`, `product_id`, `med_type`, `c_14_34_medicine_no`, `c_14_35_description`, `c_14_36_quantity_pack`, `c_14_37_net_price_pack`, `c_14_38_no_of_packs`, `c_14_39_total_quantity`, `c_14_40_medicine_form`, `c_14_41_total_amount`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '27ec58249cee62f8d37140d6073b9f7f', 1, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-06-09 07:04:19', '2022-06-09 07:04:19'),
(2, '10b58b178690820d28b37d9297b08b1f', 1, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-06-09 07:04:19', '2022-06-09 07:04:19'),
(7, '27ec58249cee62f8d37140d6073b9f7f', 4, '108-1', 'g', '108-1G', 'sdfsdfxy 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-06-09 07:11:21', '2022-06-11 06:17:58'),
(8, '10b58b178690820d28b37d9297b08b1f', 4, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-06-09 07:11:21', '2022-06-09 07:11:21'),
(9, '27ec58249cee62f8d37140d6073b9f7f', 5, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-06-11 06:30:04', '2022-06-11 06:30:04'),
(10, '27798f38a33b238cb70b119d44663194', 6, '108-1', 'g', '108-1G', 'sdfsdfx 50mg', '1000', '12430', '2', '1', 'Capsule', '1243', 0, NULL, '2022-06-13 09:32:19', '2022-06-14 14:27:31'),
(11, '716fb83bb8fb377af499acdf31276ef2', 7, '109-2', 'g', '109-2G', 'Paliperidone Palmitate 3 mg Tablets ( Generic of Invega Sustenna )', '100', '360', '1', '1', 'Tablet', '360', 0, NULL, '2022-06-14 17:52:56', '2022-06-14 17:52:56'),
(12, 'a0b94efd0711e7bb8face95c823b737d', 8, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-16 07:44:37', '2022-06-16 07:44:37'),
(13, '30e31671247b76f482e6c3bb04c8ed56', 9, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-16 17:38:35', '2022-06-16 17:38:35'),
(14, 'a0b94efd0711e7bb8face95c823b737d', 10, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-17 04:50:10', '2022-06-17 04:50:10'),
(15, 'a0b94efd0711e7bb8face95c823b737d', 11, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-17 17:16:11', '2022-06-17 17:16:11'),
(16, '30e31671247b76f482e6c3bb04c8ed56', 12, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-17 17:17:47', '2022-06-17 17:17:47'),
(17, '30e31671247b76f482e6c3bb04c8ed56', 13, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-17 17:55:56', '2022-06-17 17:55:56'),
(18, '30e31671247b76f482e6c3bb04c8ed56', 14, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-17 18:14:32', '2022-06-17 18:14:32'),
(19, 'a0b94efd0711e7bb8face95c823b737d', 15, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-18 08:57:17', '2022-06-18 08:57:17'),
(20, '30e31671247b76f482e6c3bb04c8ed56', 16, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-18 09:21:58', '2022-06-18 09:21:58'),
(21, '30e31671247b76f482e6c3bb04c8ed56', 17, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-18 11:56:58', '2022-06-18 11:56:58'),
(22, 'a0b94efd0711e7bb8face95c823b737d', 17, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-18 11:56:58', '2022-06-18 11:56:58'),
(23, '4d0a9a4745e128eeb494c7b0a5b03c1a', 18, '108-2', 'b', '108-2G', 'Palbace 100 mg Capsules of Pfizer ( Brand Drug )', '21', '2079', '1', '1', 'Capsule', '2079', 0, NULL, '2022-06-18 12:27:15', '2022-06-18 12:27:15'),
(24, '4d0a9a4745e128eeb494c7b0a5b03c1a', 19, '108-2', 'b', '108-2G', 'Palbace 100 mg Capsules of Pfizer ( Brand Drug )', '21', '2079', '1', '1', 'Capsule', '2079', 0, NULL, '2022-06-18 12:39:05', '2022-06-18 12:39:05'),
(25, '30e31671247b76f482e6c3bb04c8ed56', 20, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-18 12:44:06', '2022-06-18 12:44:06'),
(26, '30e31671247b76f482e6c3bb04c8ed56', 21, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-23 07:27:13', '2022-06-23 07:27:13'),
(27, '5c172c290a0b6fddf21e20ce34fe923f', 22, '108-3', 'g', '108-3G', 'Palbociclib 125 mg Capsules ( Generic of Ibrance / Palbace )', '42', '2543', '2', '1', 'Capsule', '2543', 0, NULL, '2022-06-23 07:56:50', '2022-06-23 07:56:50'),
(28, 'a0b94efd0711e7bb8face95c823b737d', 23, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1279', '2', '1', 'Capsule', '1279', 0, NULL, '2022-06-24 06:48:02', '2022-06-24 06:48:02'),
(29, '30e31671247b76f482e6c3bb04c8ed56', 24, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-24 09:39:41', '2022-06-24 09:39:41'),
(30, '30e31671247b76f482e6c3bb04c8ed56', 25, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-24 09:43:59', '2022-06-24 09:43:59'),
(31, '30e31671247b76f482e6c3bb04c8ed56', 26, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-06-28 04:20:19', '2022-06-28 04:20:19'),
(32, '30e31671247b76f482e6c3bb04c8ed56', 27, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-06-29 06:08:00', '2022-06-29 06:08:00'),
(33, '30e31671247b76f482e6c3bb04c8ed56', 28, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-06-29 06:46:06', '2022-06-29 06:46:06'),
(34, '30e31671247b76f482e6c3bb04c8ed56', 29, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-06-29 06:47:29', '2022-06-29 06:47:29'),
(35, '27ec58249cee62f8d37140d6073b9f7f', 30, '108-1', 'g', '108-1G', 'sdfsdfxy 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-06-29 06:57:27', '2022-06-29 06:57:27'),
(36, '10b58b178690820d28b37d9297b08b1f', 30, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-06-29 06:57:27', '2022-06-29 06:57:27'),
(37, '30e31671247b76f482e6c3bb04c8ed56', 31, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-06-29 11:48:34', '2022-06-29 11:48:34'),
(38, '30e31671247b76f482e6c3bb04c8ed56', 32, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-06-29 12:32:56', '2022-06-29 12:32:56'),
(39, 'a0b94efd0711e7bb8face95c823b737d', 33, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-06-29 12:58:13', '2022-06-29 12:58:13'),
(51, 'a0b94efd0711e7bb8face95c823b737d', 38, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-06-30 06:04:17', '2022-06-30 06:04:17'),
(52, '3ae192d4068ce5ae377ed761ae82142b', 39, '114-1', 'b', '114-1G', 'Ixapana 10 mg Capsules of Novartis ( Brand Drug )', '6', '4284', '1', '1', 'Capsules', '4284', 0, NULL, '2022-07-04 18:11:23', '2022-07-04 18:11:23'),
(53, '30e31671247b76f482e6c3bb04c8ed56', 40, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-05 10:15:43', '2022-07-05 10:15:43'),
(54, 'b5426ab568d6023e4700ce4a69e5bf4f', 41, '108-3', 'b', '108-3G', 'Palbace 125 mg Capsules of Pfizer ( Brand Drug )', '42', '4747', '2', '1', 'Capsule', '4747', 0, NULL, '2022-07-05 10:29:00', '2022-07-05 10:29:00'),
(55, '30e31671247b76f482e6c3bb04c8ed56', 42, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-05 10:34:26', '2022-07-05 10:34:26'),
(56, 'a0b94efd0711e7bb8face95c823b737d', 43, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-05 10:36:27', '2022-07-05 10:36:27'),
(57, '2d1c19bb03f4eaf43a4682624ba3921c', 44, '108-4', 'g', '108-4G', 'dggdfg', '100', '12', '1', '49', 'Tablet', '588', 0, NULL, '2022-07-07 06:42:44', '2022-07-07 07:04:06'),
(58, '30e31671247b76f482e6c3bb04c8ed56', 45, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '13', 'Capsule', '8021', 0, NULL, '2022-07-07 06:58:21', '2022-07-07 07:01:26'),
(59, '30e31671247b76f482e6c3bb04c8ed56', 46, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-07 07:08:28', '2022-07-07 07:08:28'),
(60, '30e31671247b76f482e6c3bb04c8ed56', 47, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-07 07:21:01', '2022-07-07 07:21:01'),
(61, '30e31671247b76f482e6c3bb04c8ed56', 48, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '9', 'Capsule', '5553', 0, NULL, '2022-07-07 11:34:35', '2022-07-07 11:34:35'),
(62, 'a0b94efd0711e7bb8face95c823b737d', 49, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-07 11:45:37', '2022-07-07 11:45:37'),
(63, 'a0b94efd0711e7bb8face95c823b737d', 50, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-07 11:50:43', '2022-07-07 11:50:43'),
(64, '27ec58249cee62f8d37140d6073b9f7f', 51, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-07-08 06:27:59', '2022-07-08 06:27:59'),
(65, '10b58b178690820d28b37d9297b08b1f', 51, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-07-08 06:27:59', '2022-07-08 06:27:59'),
(66, '30e31671247b76f482e6c3bb04c8ed56', 52, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '9', 'Capsule', '5553', 0, NULL, '2022-07-08 06:37:20', '2022-07-08 06:37:20'),
(67, '30e31671247b76f482e6c3bb04c8ed56', 53, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '9', 'Capsule', '5553', 0, NULL, '2022-07-08 06:37:50', '2022-07-08 06:37:50'),
(68, '30e31671247b76f482e6c3bb04c8ed56', 54, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-08 06:38:26', '2022-07-08 06:38:26'),
(69, '30e31671247b76f482e6c3bb04c8ed56', 55, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-08 08:04:48', '2022-07-08 08:04:48'),
(70, 'a0b94efd0711e7bb8face95c823b737d', 56, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-08 08:46:45', '2022-07-08 08:46:45'),
(71, '27ec58249cee62f8d37140d6073b9f7f', 57, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-07-08 09:19:12', '2022-07-08 09:19:12'),
(72, '10b58b178690820d28b37d9297b08b1f', 57, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-07-08 09:19:12', '2022-07-08 09:19:12'),
(73, '27ec58249cee62f8d37140d6073b9f7f', 58, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-07-08 09:22:39', '2022-07-08 09:22:39'),
(74, '10b58b178690820d28b37d9297b08b1f', 58, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-07-08 09:22:39', '2022-07-08 09:22:39'),
(75, '27ec58249cee62f8d37140d6073b9f7f', 59, '108-1', 'g', '108-1G', 'sdfsdf 50mg', '50', '643', '1', '1', 'Capsule', '643', 0, NULL, '2022-07-08 09:47:04', '2022-07-08 09:47:04'),
(76, '10b58b178690820d28b37d9297b08b1f', 59, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2499', '4', '1', 'Capsule', '2499', 0, NULL, '2022-07-08 09:47:04', '2022-07-08 09:47:04'),
(77, 'a0b94efd0711e7bb8face95c823b737d', 60, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-08 09:50:43', '2022-07-08 09:50:43'),
(78, '30e31671247b76f482e6c3bb04c8ed56', 61, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '662', '1', '1', 'Capsule', '662', 0, NULL, '2022-07-08 10:01:15', '2022-07-08 10:01:15'),
(79, 'a0b94efd0711e7bb8face95c823b737d', 62, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-08 10:55:03', '2022-07-08 10:55:03'),
(80, 'a0b94efd0711e7bb8face95c823b737d', 63, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-13 06:38:31', '2022-07-13 06:38:31'),
(81, '30e31671247b76f482e6c3bb04c8ed56', 64, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-14 12:22:50', '2022-07-14 12:22:50'),
(82, 'b5426ab568d6023e4700ce4a69e5bf4f', 64, '108-3', 'b', '108-3G', 'Palbace 125 mg Capsules of Pfizer ( Brand Drug )', '42', '4747', '2', '1', 'Capsule', '4747', 0, NULL, '2022-07-14 12:22:50', '2022-07-14 12:22:50'),
(83, 'a0b94efd0711e7bb8face95c823b737d', 64, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-14 12:22:50', '2022-07-14 12:22:50'),
(84, 'ffa5df20453c420a8ce2463a4e0f5990', 64, '108-3', 'b', '108-3G', 'Palbace 125 mg Capsules of Pfizer ( Brand Drug )', '126', '13920', '6', '1', 'Capsule', '13920', 0, NULL, '2022-07-14 12:22:50', '2022-07-14 12:22:50'),
(85, '10b58b178690820d28b37d9297b08b1f', 64, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '84', '2332', '4', '1', 'Capsule', '2332', 0, NULL, '2022-07-14 12:22:50', '2022-07-14 12:22:50'),
(86, 'a0b94efd0711e7bb8face95c823b737d', 65, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-18 23:57:56', '2022-07-18 23:57:56'),
(87, '30e31671247b76f482e6c3bb04c8ed56', 66, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-19 00:30:38', '2022-07-19 00:30:38'),
(88, 'a0b94efd0711e7bb8face95c823b737d', 67, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '2', 'Capsule', '2388', 0, NULL, '2022-07-22 00:58:00', '2022-07-22 00:58:00'),
(89, 'a0b94efd0711e7bb8face95c823b737d', 68, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-22 02:43:30', '2022-07-22 02:43:30'),
(90, 'a0b94efd0711e7bb8face95c823b737d', 69, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-22 02:43:59', '2022-07-22 02:43:59'),
(91, 'a0b94efd0711e7bb8face95c823b737d', 70, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-22 02:47:57', '2022-07-22 02:47:57'),
(92, 'a0b94efd0711e7bb8face95c823b737d', 71, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '42', '1194', '2', '1', 'Capsule', '1194', 0, NULL, '2022-07-22 02:57:37', '2022-07-22 02:57:37'),
(93, '30e31671247b76f482e6c3bb04c8ed56', 72, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-22 07:29:14', '2022-07-22 07:29:14'),
(94, '30e31671247b76f482e6c3bb04c8ed56', 73, '108-2', 'g', '108-2G', 'Palbociclib 100 mg Capsules ( Generic of Ibrance / Palbace )', '21', '617', '1', '1', 'Capsule', '617', 0, NULL, '2022-07-22 07:39:28', '2022-07-22 07:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_no` int(11) NOT NULL,
  `route` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `s_no`, `route`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'aadhya.1-meds-info', 1, '1 Meds Info ', 'admin', NULL, NULL),
(3, 'aadhya.2-meds-price', 2, '2 Meds Prices', 'admin', NULL, NULL),
(4, 'aadhya.3-home', 3, '3 Home Page', 'admin', NULL, NULL),
(5, 'aadhya.country_freight', 4, '4 Country Freight', 'admin', NULL, NULL),
(6, 'aadhya.bank_detail', 5, ' 5 Bank Details ', 'admin', NULL, NULL),
(7, 'aadhya.text_reviews', 6, '6 Text Reviews ', 'admin', NULL, NULL),
(8, 'aadhya.video_reviews', 7, '7 Video Reviews', 'admin', NULL, NULL),
(9, 'aadhya.blogs_news', 8, '8 Blogs News', 'admin', NULL, NULL),
(10, 'aadhya.query', 10, '10 Query ', 'admin', NULL, NULL),
(11, 'aadhya.buyer_login', 11, '11 Buyer Login', 'admin', NULL, NULL),
(12, 'aadhya.referrals', 13, '13 Referrals', 'admin', NULL, NULL),
(14, 'aadhya.faqs', 15, '15 FAQs', 'admin', NULL, NULL),
(15, 'aadhya.pending_cart', 17, '17 Pending Cart', 'admin', NULL, NULL),
(16, 'aadhya.order_status', 18, '18 Order Status ', 'admin', NULL, NULL),
(17, 'aadhya.order_refill', 19, '19 Order Refill', 'admin', NULL, NULL),
(19, 'aadhya.password', 16, '16 Password', 'admin', NULL, NULL),
(20, 'aadhya.blogs_reviews', 9, '9 Blogs Reviews', 'admin', NULL, NULL),
(21, 'aadhya.promo_discount', 12, '12 Promo Discount', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `query_details`
--

CREATE TABLE `query_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_10_1_s_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_2_date` date DEFAULT NULL,
  `c_10_3_sent_from_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_4_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_10_5_business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_6_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_10_7_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_8_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_9_attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_10_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_11_order_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_12_refill_pay_address` text COLLATE utf8mb4_unicode_ci,
  `c_10_13_refill_del_address` text COLLATE utf8mb4_unicode_ci,
  `c_10_14_refill_order_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_15_refill_other_change` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_10_16_email_reply` date DEFAULT NULL,
  `c_10_17_wa_reply` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `query_details`
--

INSERT INTO `query_details` (`id`, `c_10_1_s_no`, `c_10_2_date`, `c_10_3_sent_from_page`, `c_10_4_name`, `c_10_5_business_name`, `c_10_6_email`, `c_10_7_contact_no`, `c_10_8_country`, `c_10_9_attachment`, `c_10_10_message`, `c_10_11_order_ref`, `c_10_12_refill_pay_address`, `c_10_13_refill_del_address`, `c_10_14_refill_order_quantity`, `c_10_15_refill_other_change`, `c_10_16_email_reply`, `c_10_17_wa_reply`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'gfdh', NULL, 'arhamconsultants@gmail.com', 'fdfghdh', 'fghd', NULL, 'fgdhfhghg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-06-18 10:53:31', '2022-06-18 10:53:31'),
(2, NULL, NULL, NULL, 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '6465161', 'USA', NULL, 'Hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-06-18 11:02:21', '2022-06-18 11:02:21'),
(3, NULL, NULL, 'contact-us', 'sadad', NULL, 'admin@admin.com', '45778578787', 'india', NULL, 'jhkgkgjk', NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, 0, NULL, '2022-06-18 11:04:45', '2022-06-18 11:28:58'),
(4, NULL, NULL, 'contact-us', 'sfsdf', NULL, 'dsfsdf@fdf.comdf', '6465161', 'dfsdf', NULL, 'sdfsdfsdf', NULL, NULL, NULL, NULL, NULL, '2022-06-10', NULL, 0, NULL, '2022-06-18 11:08:32', '2022-06-18 11:28:17'),
(5, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Sanjay Jain', NULL, 'arhamconsultants@gmail.com', '11111111', NULL, NULL, 'PATIENT PURCHASE QUERY : Palbociclib / Albace,Ibrance,Palbace', NULL, NULL, NULL, NULL, NULL, '2022-06-23', NULL, 0, NULL, '2022-06-23 06:09:36', '2022-06-23 06:10:20'),
(6, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Sahil Jain', 'Sahil Enterprises', 'sahil@gmail.com', '22222222', NULL, '1655964874.docx', 'BUSINESS PURCHASE QUERY: Palbociclib / Albace,Ibrance,Palbace', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-06-23 06:14:34', '2022-06-23 06:14:56'),
(7, NULL, NULL, NULL, 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', 'Albania', NULL, NULL, '200121', 'Payment Address is OK', 'Delivery Address is OK', 'Order Quantity is OK', 'Any Other is none', NULL, NULL, 0, NULL, '2022-06-23 07:36:24', '2022-06-23 07:36:24'),
(8, NULL, NULL, 'contact-us', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '22222222', 'USA', NULL, 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-06-23 07:45:16', '2022-06-23 07:45:16'),
(9, '108', NULL, '149-Anti-HIV-Aids-Drugs-Generic-Maraviroc-Brand-Selzentry.aspx', 'df', 'asdsad', 'arhamconsultants@gmail.com', '75787876868', NULL, '1656049076.jpg', 'ituiu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-06-24 05:37:56', '2022-06-29 05:55:14'),
(10, NULL, NULL, NULL, 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', 'Albania', NULL, NULL, '200126', 'Payment Address is OK', 'Delivery Address is OK', 'Order Quantity is OK', 'Any Other is none', NULL, NULL, 0, NULL, '2022-06-29 06:54:29', '2022-07-05 09:08:00'),
(11, NULL, NULL, NULL, 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', 'Albania', NULL, NULL, '200115', 'Payment Address OK -', 'Delivery Address OK -', 'Order Quantity OK -', 'Any Other OK -', NULL, NULL, 0, NULL, '2022-07-03 17:25:52', '2022-07-05 09:07:43'),
(12, NULL, NULL, 'contact-us', 'Your Full Name*', NULL, 'YourEmail@gmail.com', '+1(11)235', 'Your Country*', NULL, 'gsgwetweterg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-03 17:33:43', '2022-07-05 09:07:21'),
(13, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '6465161', NULL, NULL, 'Message / Requirement*', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-03 17:41:14', '2022-07-05 09:06:57'),
(14, '109', NULL, 'buy-paliperidone-palmitate-invega-online', 'Sanjay Jain', 'Consultants India', 'saanjoyjain@gmail.com', '6461631', NULL, '1656870176.pdf', 'Message / Requirement*', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-03 17:42:56', '2022-07-03 17:42:56'),
(15, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'yogesh', 'asdsad', 'arhamconsultants@gmail.com', '75787876868', NULL, '1657012932.pdf', 'edd', NULL, NULL, NULL, NULL, NULL, '2022-06-30', '2022-07-06', 0, NULL, '2022-07-05 09:22:12', '2022-07-05 09:47:53'),
(16, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'yogesh', 'asdsad', 'arhamconsultants@gmail.com', '75787876868', NULL, '1657013509.pdf', 'demo', NULL, NULL, NULL, NULL, NULL, '2022-07-05', '2022-07-06', 0, NULL, '2022-07-05 09:31:50', '2022-07-05 09:49:04'),
(17, NULL, NULL, 'Fast Refill', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', 'American Samoa', NULL, NULL, '200125', 'Payment Address OK -', 'Delivery Address OK -', 'Order Quantity OK -', 'Any Other OK -', NULL, NULL, 0, NULL, '2022-07-05 10:30:12', '2022-07-05 10:30:12'),
(18, NULL, NULL, 'Contact Us', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '6465161', 'USA', NULL, 'vjgjgjg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-05 10:30:55', '2022-07-05 10:30:55'),
(19, NULL, NULL, 'Contact Us', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '22222222', 'USA', NULL, 'fghfgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-16 11:37:10', '2022-07-16 11:37:10'),
(20, NULL, NULL, 'Fast Refill', 'Sanjay Jain', NULL, 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', 'American Samoa', NULL, NULL, '200147', 'Payment Address is OK', 'Delivery Address is OK', 'Order Quantity is OK', 'Any Other is none', NULL, NULL, 0, NULL, '2022-07-16 11:38:00', '2022-07-16 11:38:00'),
(21, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Sanjay Jain', 'Consultants India', 'saanjoyjain@gmail.com', '6465161', NULL, '1658297760.jpg', 'bbbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-20 00:46:00', '2022-07-20 00:46:00'),
(22, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Full Name', 'sdfsdf', 'arhamconsultants@gmail.com', '+1(11)235', NULL, '1658297891.jpg', 'fsdfdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-20 00:48:11', '2022-07-20 00:48:11'),
(23, '108', NULL, 'buy-palbociclib-ibrance-palbace-online', 'Full Name', 'Consultants India', 'arhamconsultants@gmail.com', '64611', NULL, '1658298198.jpg', 'sdsdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-07-20 00:53:18', '2022-07-20 00:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-06-03 11:42:02', '2022-06-03 11:42:02'),
(2, 'staff-7', 'admin', '2022-06-03 11:42:59', '2022-06-03 11:42:59'),
(3, 'staff-8', 'admin', '2022-06-24 05:06:30', '2022-06-24 05:06:30'),
(4, 'staff-9', 'admin', '2022-07-05 05:17:58', '2022-07-05 05:17:58'),
(5, 'staff-10', 'admin', '2022-07-05 05:35:43', '2022-07-05 05:35:43'),
(6, 'staff-11', 'admin', '2022-07-16 10:35:31', '2022-07-16 10:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(19, 1),
(20, 1),
(21, 1),
(1, 2),
(3, 2),
(1, 3),
(1, 4),
(3, 4),
(1, 5),
(10, 5),
(16, 5),
(16, 6);

-- --------------------------------------------------------

--
-- Table structure for table `text_reviews`
--

CREATE TABLE `text_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_from_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top5` tinyint(1) NOT NULL DEFAULT '0',
  `testimonials` tinyint(1) NOT NULL DEFAULT '0',
  `about` tinyint(1) NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `testimonial_top_10` tinyint(1) NOT NULL DEFAULT '0',
  `home_top_5` tinyint(1) NOT NULL DEFAULT '0',
  `about_top_5` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text_reviews`
--

INSERT INTO `text_reviews` (`id`, `full_name`, `country`, `email`, `posting_from_page`, `page_name`, `rating`, `comment`, `medicine`, `top5`, `testimonials`, `about`, `home`, `testimonial_top_10`, `home_top_5`, `about_top_5`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-brand-generic-medications-at-hk-canada-online-pharmacy-marketplace-co', 'index', '5', 'demo edited', '108', 0, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-07-05 11:33:04', '2022-07-05 12:13:17'),
(2, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '2', 'expanded medications range. We offer the same excellent online referral prescription drugs shipment service for 100s of affordable prescriptions medicines, for cancer and many other critical and general diseases. We help you get high discounts and lowest prices on international medicines, with the comfort to order them online from your house.', '109', 0, 1, 1, 1, 0, 0, 0, 1, NULL, '2022-07-05 11:33:44', '2022-07-06 08:48:21'),
(3, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '4', 'fsfsdf', '108', 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-06 10:01:53', '2022-07-06 10:02:22'),
(4, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '1', 'demo', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-06 10:08:40', '2022-07-06 10:08:40'),
(5, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '1', 'demo', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-06 10:08:58', '2022-07-06 10:08:58'),
(6, 'Sahil Jain', 'XUSA', 'mj1997.jain@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '3', 'gdgdg', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-06 10:09:44', '2022-07-06 10:09:44'),
(7, 'yogesh', 'uttar pradesh', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '2', 'demo', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-06 10:30:10', '2022-07-06 10:30:10'),
(8, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-brand-generic-medications-at-hk-canada-online-pharmacy-marketplace-co', 'index', '2', 'demo', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-07 05:06:01', '2022-07-07 05:06:01'),
(9, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'http://911meds.ebslon.com/buy-brand-generic-medications-at-hk-canada-online-pharmacy-marketplace-co', 'index', '4', 'xsdfsdfsdf', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-07 05:07:28', '2022-07-07 05:07:28'),
(10, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'http://911meds.ebslon.com/reviews-testimonials', 'review-testimonials', '4', 'sdfsdf', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-12 07:22:48', '2022-07-12 07:22:48'),
(11, 'Sahil Jain', 'USA', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/reviews-testimonials', 'review-testimonials', '5', 'gggggg', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-12 07:23:50', '2022-07-12 07:23:50'),
(12, 'SJ', 'XUSA', 'medibridgeindia@gmail.com', 'http://911meds.ebslon.com/reviews-testimonials', 'testimonials', '2', 'ddddddddddd', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-12 07:24:33', '2022-07-12 07:24:33'),
(13, 'yogesh', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/reviews-testimonials', 'testimonials', '1', 'demo', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-12 07:37:43', '2022-07-12 07:37:43'),
(14, 'sdfsdf', 'Your Country*', 'Sahiljain1@gmail.com', 'http://911meds.ebslon.com/reviews-testimonials', 'testimonials', '2', 'After filling more than 3 million prescriptions in USA, UK, Australia, Philippines, Korea, and too many others countries. We’re the most reviewed and independently five-star rated online pharmacy in the world with more than 375,000 real customer reviews through ShopperApproved.com and a stellar Trus', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-12 07:39:13', '2022-07-12 07:39:13'),
(16, 'Sanjay Jain', 'USA', 'Sahiljain1@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '5', 'Hello', '108', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-07-17 09:33:23', '2022-07-17 09:35:04'),
(17, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '5', 'Your Review 17-7-2022', '108', 1, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-17 11:48:50', '2022-07-17 11:49:26'),
(18, 'Sanjay Jain', 'USA', 'saanjoyjain@gmail.com', 'http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online', '108', '3', 'Review 17', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-17 11:52:35', '2022-07-17 11:52:35'),
(19, 'Sanjay Jain', 'India', 'arhamconsultants@gmail.com', 'http://911meds.ebslon.com/buy-brand-generic-medications-at-hk-canada-online-pharmacy-marketplace-co', 'index', '4', 'ssdfsdfsdf', NULL, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-07-17 12:24:23', '2022-07-17 12:24:23'),
(20, 'Sanjay Jain', 'India', 'saanjoyjain@gmail.com', 'https://911globalmeds.com/buy-palbociclib-ibrance-palbace-online', '108', '5', 'Your Review', '108', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-07-20 01:18:49', '2022-07-20 01:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `country`, `email_verified_at`, `password`, `is_block`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arhamconsultants@gmail.com', 'arhamconsultants@gmail.com', '7054948143', '12', NULL, '$2y$10$tFjR/TNWM5hJGK/.qQassOjj2COvaBEsKD1aykxd1mxE0F0n.4W56', 0, 1, '5VVxkd3SwwxwB3KWs0i7YFgUPvdgmberOMtkaTdkHVpKBgfyv0MYrC6CP327', '2022-04-11 02:24:33', '2022-04-15 05:15:51'),
(3, 'yogesh sir', 'yogesh@ebslon.com', '7054948143', '99', NULL, '$2y$10$JNcLBCO6yZmUotRHdGe8gutYHhlx9qANjhr989dK/Juw.dFv856XS', 0, 0, NULL, '2022-04-12 23:50:23', '2022-04-14 00:43:36'),
(5, 'vijay', 'vijaybha@gmail.com', '9598196732', '3', NULL, '$2y$10$jfnbrGIxu8RUismaKYWdlOrxm/XzYSHZNL08JioHUiv31cwbpxMbK', 0, 0, NULL, '2022-04-12 23:59:15', '2022-04-12 23:59:15'),
(6, 'demo1', 'demo1@gmail.com', '32323232321', '1', NULL, 'asdfasdf', 0, 0, 'ThoV8prvEI5RKrlgfeHpvQZUbxXPsJD1h3rpQ5lRgrcIob0xp9brUrWRdvCd', '2022-04-13 23:27:55', '2022-05-17 09:41:25'),
(7, 'pankaj', 'pankah1@gmail.com', '3232323232', '13', NULL, '$2y$10$ZkIPH1OlFSgSmhw7mfRqoO8d9hLSzwuaVr9iei0rs0lbO.gq1nwHe', 0, 0, NULL, '2022-04-21 23:16:37', '2022-05-17 09:37:35'),
(8, 'Sanjay Jain', 'saanjoyjain@gmail.com', '+91-1-(87)-9999884828', '4', NULL, 'asdfasdf', 0, 0, '5NjMh5glsprZiHEwDndYujIkfFsFPDbLviir6qWZqUG6jMVjlXCUJHeUdX7M', '2022-05-13 12:17:46', '2022-07-04 16:40:19'),
(9, 'yogesh', 'yogesh@ebslon1.com', '9874563214', '12', NULL, 'asdfasdf', 0, 0, NULL, '2022-05-13 12:18:43', '2022-05-13 12:18:43'),
(10, 'Sanjay Jain', 'medibridgeindia@gmail.com', '+1-564-87655', '1', NULL, 'medi@1234', 0, 0, NULL, '2022-05-14 10:17:20', '2022-05-14 10:17:20'),
(11, 'SJ', 'medibridgeindia1@gmail.com', '+91 9999884828', '13', NULL, 'medi@123', 0, 0, NULL, '2022-05-15 07:20:54', '2022-05-15 07:20:54'),
(12, 'yogesh', 'yogesh@gmail.comm', '475757424452', '1', NULL, '$2y$10$LAvyevqbDhspAizooGS0Je.o2BBkQeIwjiY44vAAWs0dJrd8yVjNG', 0, 0, NULL, '2022-05-16 12:30:52', '2022-05-16 12:30:52'),
(13, 'yogesh', 'yogesh2@gmail.com', '475757424452', '1', NULL, '$2y$10$c0nr7d524wd0/iN./ZUjXuYETZUjQzDs8wG3NDVH7f76Pv6zEObSm', 0, 0, NULL, '2022-05-16 12:36:20', '2022-05-16 12:36:20'),
(14, 'Sahil Jain', 'medibridgeindia2@gmail.com', '+1-564-87655', '18', NULL, '$2y$10$9qLukU71uki9wNdvS02OW.a.J/uDWwxyA3F2WjayJMH/.L/SrDaLC', 0, 0, NULL, '2022-05-16 12:47:03', '2022-05-16 12:47:03'),
(15, 'Sanjay Jain', 'arhamconsultants1@gmail.com', '+91 9999884828', '17', NULL, '$2y$10$xpXnbNbLVYw5c.zZzDATnuU5nMcM0hGpTmxDakzFL5TQxb9KhhcGi', 0, 0, NULL, '2022-05-16 12:55:51', '2022-05-16 12:55:51'),
(16, 'sdfsdf', 'medibridgeindia3@gmail.com', '+91 9999884828', '13', NULL, '$2y$10$LQapFp/7mKMaCvU4LCbwr.iy3lU8tMJcGeaLusK6MaxRgkM/KCvk2', 0, 0, NULL, '2022-05-16 12:58:51', '2022-05-16 12:58:51'),
(17, 'Sanjay Jain', 'arhamconsultants2@gmail.com', '+91 9999884828', '1', NULL, '$2y$10$7cLqCiCRnOIX/Toz6FsoXe6rQ/sSOFkgXQjw.NoDwSz68/.App28C', 0, 0, NULL, '2022-05-17 05:05:40', '2022-05-17 05:05:40'),
(18, 'Sanjay Jain', 'saanjoyjain1@gmail.com', '+91 9999884828', '1', NULL, '$2y$10$fzbpQVSTkXS8hz5FOZdix.1lrmy2LT2POoI6EpNVIYfSW3oPfykqO', 0, 0, NULL, '2022-05-17 05:07:36', '2022-05-17 05:07:36'),
(19, 'Sanjay Jain', 'AREhad%123@dfdf', '+849-88(34)4454', '15', NULL, '$2y$10$s7DqmOnfCB59H7X.3DK.1u.lA9sqd/L6HcAh3US7Lu3QoDqG.C8We', 0, 0, NULL, '2022-05-17 05:30:39', '2022-05-17 05:30:39'),
(20, 'fgh', 'fghgd@gmai.com', '789456132', '1', NULL, '$2y$10$EGVDeSq8Tj6/9a5tMEhRTu6xGO1c7Y2qqmv6Hn/yH1W0sZgNXWbpW', 0, 0, NULL, '2022-05-17 05:42:30', '2022-05-17 05:42:30'),
(21, 'cxvxcv', 'sdfsdf@dfd.com', '2334', '16', NULL, '$2y$10$eLH51aWre8fyeFnU4FcQE.MJcN//VHR.zb6OwC73tZyIC05oJFncC', 0, 0, NULL, '2022-05-17 05:42:30', '2022-05-17 05:42:30'),
(23, 'Sanjay Jain', 'saanjoyjain5@gmail.com', '+849-88(34)4454', '14', NULL, 'asdfasdf', 0, 0, NULL, '2022-05-18 05:25:32', '2022-05-18 05:25:32'),
(24, 'Sahil Jain', 'Sahiljain1@gmail.com', '32323232321', '13', NULL, 'asdfasdf1', 0, 0, NULL, '2022-06-14 18:38:12', '2022-07-07 10:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `video_reviews`
--

CREATE TABLE `video_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_position` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_top_5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_top_5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_reviews`
--

INSERT INTO `video_reviews` (`id`, `full_name`, `country`, `email`, `posting_date`, `display_position`, `image`, `video`, `testimonial`, `about`, `testimonial_top_5`, `about_top_5`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Full Names', 'India', 'saanjoyjain@gmail.com', '2022-07-12', 1, 'http://911globalmeds.com/img/114-5.jpg', 'http://911globalmeds.com/videos/114-5.mp4', '1', '1', '0', '0', 0, NULL, '2022-07-12 06:10:03', '2022-07-12 06:11:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1-1-meds-names`
--
ALTER TABLE `1-1-meds-names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1-2-meds-info`
--
ALTER TABLE `1-2-meds-info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1-3-meds-leaflets`
--
ALTER TABLE `1-3-meds-leaflets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1-4-meds-videos`
--
ALTER TABLE `1-4-meds-videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1-5-meds-seos`
--
ALTER TABLE `1-5-meds-seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2-1-meds-products`
--
ALTER TABLE `2-1-meds-products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2-2-meds-prices`
--
ALTER TABLE `2-2-meds-prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2-3-meds-forexes`
--
ALTER TABLE `2-3-meds-forexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-1-home-header`
--
ALTER TABLE `3-1-home-header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-2-main-body`
--
ALTER TABLE `3-2-main-body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-3-general-diseases`
--
ALTER TABLE `3-3-general-diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-4-critical-diseases`
--
ALTER TABLE `3-4-critical-diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-5-home-qa`
--
ALTER TABLE `3-5-home-qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3-6-home-seo`
--
ALTER TABLE `3-6-home-seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4-country-freight`
--
ALTER TABLE `4-country-freight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5-bank-detail`
--
ALTER TABLE `5-bank-detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `12-promo-discount`
--
ALTER TABLE `12-promo-discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `14-summary`
--
ALTER TABLE `14-summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_logins`
--
ALTER TABLE `admin_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_logins_email_unique` (`email`);

--
-- Indexes for table `blog_news`
--
ALTER TABLE `blog_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_reviews`
--
ALTER TABLE `blog_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `critical_medicines`
--
ALTER TABLE `critical_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_titles`
--
ALTER TABLE `faq_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget_passwords`
--
ALTER TABLE `forget_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_medicines`
--
ALTER TABLE `general_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meds_keywords`
--
ALTER TABLE `meds_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `query_details`
--
ALTER TABLE `query_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `text_reviews`
--
ALTER TABLE `text_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_reviews`
--
ALTER TABLE `video_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1-1-meds-names`
--
ALTER TABLE `1-1-meds-names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `1-2-meds-info`
--
ALTER TABLE `1-2-meds-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `1-3-meds-leaflets`
--
ALTER TABLE `1-3-meds-leaflets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `1-4-meds-videos`
--
ALTER TABLE `1-4-meds-videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `1-5-meds-seos`
--
ALTER TABLE `1-5-meds-seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `2-1-meds-products`
--
ALTER TABLE `2-1-meds-products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `2-2-meds-prices`
--
ALTER TABLE `2-2-meds-prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `2-3-meds-forexes`
--
ALTER TABLE `2-3-meds-forexes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `3-1-home-header`
--
ALTER TABLE `3-1-home-header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `3-2-main-body`
--
ALTER TABLE `3-2-main-body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `3-3-general-diseases`
--
ALTER TABLE `3-3-general-diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `3-4-critical-diseases`
--
ALTER TABLE `3-4-critical-diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `3-5-home-qa`
--
ALTER TABLE `3-5-home-qa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `3-6-home-seo`
--
ALTER TABLE `3-6-home-seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `4-country-freight`
--
ALTER TABLE `4-country-freight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `5-bank-detail`
--
ALTER TABLE `5-bank-detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `12-promo-discount`
--
ALTER TABLE `12-promo-discount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `14-summary`
--
ALTER TABLE `14-summary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_logins`
--
ALTER TABLE `admin_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_news`
--
ALTER TABLE `blog_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_reviews`
--
ALTER TABLE `blog_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `critical_medicines`
--
ALTER TABLE `critical_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faq_titles`
--
ALTER TABLE `faq_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forget_passwords`
--
ALTER TABLE `forget_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_medicines`
--
ALTER TABLE `general_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `meds_keywords`
--
ALTER TABLE `meds_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `query_details`
--
ALTER TABLE `query_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `text_reviews`
--
ALTER TABLE `text_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `video_reviews`
--
ALTER TABLE `video_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
