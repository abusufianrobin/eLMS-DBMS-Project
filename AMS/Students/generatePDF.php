<?php
require('./fpdf/fpdf.php');
include '../Includes/dbcon.php';
include '../Includes/session.php';

// Fetch student data based on session userId
$query = "SELECT tblstudents.firstName, tblstudents.lastName, tblstudents.emailAddress, tblstudents.admissionNumber, 
                 tblclass.className, tblclassarms.classArmName, tblstudents.dateCreated 
          FROM tblstudents 
          INNER JOIN tblclass ON tblstudents.classId = tblclass.Id 
          INNER JOIN tblclassarms ON tblstudents.classArmId = tblclassarms.Id 
          WHERE tblstudents.Id = '$_SESSION[userId]'";

$result = $conn->query($query);
$row = $result->fetch_assoc();

$fullName = $row['firstName'] . " " . $row['lastName'];
$email = $row['emailAddress'];
$admissionNumber = $row['admissionNumber'];
$className = $row['className'];
$sectionName = $row['classArmName'];
$admissionDate = date("d F Y", strtotime($row['dateCreated']));

// Generate the PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Title
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, 'E_Learning_Management_System', 0, 1, 'C');

// Student Details
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(0, 10, 'Student Details', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Full Name:', 0, 0);
$pdf->Cell(100, 10, $fullName, 0, 1);

$pdf->Cell(40, 10, 'Email:', 0, 0);
$pdf->Cell(100, 10, $email, 0, 1);

$pdf->Cell(40, 10, 'Student ID:', 0, 0);
$pdf->Cell(100, 10, $admissionNumber, 0, 1);

$pdf->Cell(40, 10, 'Class:', 0, 0);
$pdf->Cell(100, 10, $className, 0, 1);

$pdf->Cell(40, 10, 'Section:', 0, 0);
$pdf->Cell(100, 10, $sectionName, 0, 1);

$pdf->Cell(40, 10, 'Admission Date:', 0, 0);
$pdf->Cell(100, 10, $admissionDate, 0, 1);

// Course Table Header
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'Sl', 1, 0, 'C');
$pdf->Cell(50, 6, 'Course Name', 1, 0, 'C');
$pdf->Cell(35, 6, 'Trimester', 1, 0, 'C');
$pdf->Cell(35, 6, 'Section', 1, 0, 'C');
$pdf->Cell(35, 6, 'Class Teacher', 1, 1, 'C');

// Example Course Data (You can fetch this from the database if needed)

$pdf->SetFont('Arial', '', 10);
$courseCount = 2;
for ($i = 1; $i < $courseCount; $i++) {
    $pdf->Cell(10, 6, $i, 1, 0, 'C');
    $pdf->Cell(50, 6, 'Sample Course ' . $i, 1, 0);
    $pdf->Cell(35, 6, 'Fall 2024', 1, 0, 'C');
    $pdf->Cell(35, 6, $sectionName, 1, 0, 'C');
    $pdf->Cell(35, 6, 'Raiyan Ahmed', 1, 1, 'C');
}

$pdf->Output();
?>
