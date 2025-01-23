<?php
class Event {
    public static function getEvents($startDate, $endDate) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM events WHERE start_time >= :start_date AND end_time <= :end_date");
        $stmt->execute([
            ':start_date' => $startDate,
            ':end_date' => $endDate
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
