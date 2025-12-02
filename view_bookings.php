<?php include "db1.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Bookings</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>

/* ---- Page Background ---- */
body {
    background: linear-gradient(to bottom right, #4ca1ff, #015bb1);
    min-height: 100vh;
    padding: 40px 0;
    font-family: "Segoe UI", Arial, sans-serif;
    animation: fadePage 0.8s ease;
}

@keyframes fadePage {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}
.center-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Control width of the form/table box */
.view-box {
    width: 90%;
    max-width: 1100px; /* adjust if needed */
    margin: auto;
}
/* ---- Card Container ---- */
.view-box {
    background: #ffffff;
    padding: 35px;
    border-radius: 12px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.2);
    animation: fadeIn 1s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.98); }
    to   { opacity: 1; transform: scale(1); }
}

/* ---- Title ---- */
.title {
    text-align: center;
    font-size: 32px;
    font-weight: bold;
    color: #015bb1;
    margin-bottom: 20px;
    letter-spacing: 1px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

.title i {
    color: #0275d8;
}

/* ---- Add Button ---- */
.add-btn {
    margin-bottom: 20px;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 6px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%   { transform: scale(1); }
    50%  { transform: scale(1.05); }
    100% { transform: scale(1); }
}

/* ---- Table Styling ---- */
.table {
    border-radius: 10px;
    overflow: hidden;
    background: white;
}

.table thead {
    background: #015bb1;
    color: white;
}

.table-hover tbody tr:hover {
    background: #e8f3ff;
    transform: scale(1.005);
    transition: 0.2s ease;
}

/* Fade each row nicely */
.table tbody tr {
    animation: rowAnim 0.5s ease forwards;
    opacity: 0;
}
.table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.table tbody tr:nth-child(5) { animation-delay: 0.5s; }

@keyframes rowAnim {
    from { opacity: 0; transform: translateY(8px); }
    to   { opacity: 1; transform: translateY(0); }
}

</style>

</head>

<body>

<div class="center-wrapper">
    <div class="view-box">

        <div class="title">
            <i class="bi bi-airplane-fill"></i> ✈ View All Flight Bookings
        </div>

        <a href="add_booking.php" class="btn btn-primary add-btn">
            ➕ Add New Booking
        </a>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Trip Type</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Depart</th>
                    <th>Return</th>
                    <th>Dep Time</th>
                    <th>Ret Time</th>
                    <th>Airline</th>
                    <th>Passengers</th>
                    <th>Class</th>
                    <th>Created</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM bookings ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($res)):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['trip_type'] ?></td>
                <td><?= $row['departure'] ?></td>
                <td><?= $row['destination'] ?></td>
                <td><?= $row['departure_date'] ?></td>
                <td><?= $row['return_date'] ?></td>
                <td><?= $row['departure_time'] ?></td>
                <td><?= $row['return_time'] ?></td>
                <td><?= $row['airline'] ?></td>
                <td><?= $row['passengers'] ?></td>
                <td><?= $row['class'] ?></td>
                <td><?= $row['created_at'] ?></td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>
</html>
