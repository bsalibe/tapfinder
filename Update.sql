ALTER TABLE room
ADD FOREIGN KEY (building_id) REFERENCES buildings(building_id);
