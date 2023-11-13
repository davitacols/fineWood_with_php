<?php
// Get the search query from the request
$data = json_decode(file_get_contents("php://input"));
$searchQuery = $data->query;

// Perform a database search using the $searchQuery (sanitize and validate input!)
// Assuming $conn is your database connection
$results = [];

// Sample database query (you need to modify this based on your database schema)
$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
$searchParam = '%' . $searchQuery . '%';
$stmt->bind_param("s", $searchParam);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $results[] = $row;
}

// Return the search results as JSON
header('Content-Type: application/json');
echo json_encode($results);
?>
