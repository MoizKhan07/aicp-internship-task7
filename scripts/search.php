<?php
include '../includes/config.php';

$query = $_GET['query'];
$sql = "SELECT * FROM businesses WHERE name LIKE '%$query%' OR description LIKE '%$query%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='search-result'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No results found.";
}
?>
