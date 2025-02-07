<?php

namespace CropioAPI;

class Resources {

    private $structure = [
        'automatic_alerts' => [],
        'alerts' => [],
        'alert_types' => [],
        'additional_objects' => [],
        'agri_work_plans' => [],
        'agri_work_plan_application_mix_items' => [],
        'agronomist_assignments' => [],
        'agronomist_fields' => [],
        'agro_operations' => [],
        'application_mix_items' => [],
        'chemicals' => [],
        'company' => [],
        'counterparties' => [],
        'crops' => [],
        'data_source_gps_loggers' => [],
        'equipment_assignments' => [],
        'fertilizers' => [],
        'field_groups' => [],
        'field_scout_report_threat_mapping_items' => [],
        'field_scout_reports' => [],
        'scout_report_points' => [],
        'scout_report_point_issues' => [],
        'scout_report_point_issue_plant_parts' => [],
        'scout_report_point_measurements' => [],
        'field_shapes' => [],
        'field_shape_land_parcel_mapping_items' => [],
        'fields' => [],
        'fuel_movements' => [],
        'gps_loggers' => [],
        'gps_logger_mapping_items' => [],
        'group_folders' => [],
        'harvest_weighings' => [],
        'historical_values' => [],
        'history_items' => [],
        'implements' => [],
        'implement_region_mapping_items' => [],
        'inventory_history_items' => [],
        'land_documents' => [],
        'land_parcels' => [],
        'land_document_land_parcel_mapping_items' => [],
        'machine_regions' => [],
        'machine_region_mapping_items' => [],
        'machine_groups' => [],
        'machine_task_agro_operation_mapping_items' => [],
        'machine_task_field_mapping_items' => [],
        'machine_tasks' => [],
        'machines' => [],
        'maintenance_types' => [],
        'maintenance_type_groups' => [],
        'maintenance_records' => [],
        'maintenance_record_rows' => [],
        'maintenance_record_row_spare_part_mapping_items' => [],
        'maintenance_plans' => [],
        'maintenance_plan_rows' => [],
        'maintenance_plan_row_spare_part_mapping_items' => [],
        'notes' => [],
        'odometer_states' => [],
        'personal_identifiers' => [],
        'plant_threats' => [],
        'plant_threat_items' => [],
        'plant_threat_item_field_mapping_items' => [],
        'photos' => [],
        'productivity_estimates' => [],
        'productivity_estimate_histories' => [],
        'satellite_images' => [],
        'scouting_tasks' => [],
        'scouting_task_points' => [],
        'seeds' => [],
        'soil_tests' => [],
        'soil_test_samples' => [],
        'spare_parts' => [],
        'spare_part_manufacturers' => [],
        'users' => [],
        'user_roles' => [],
        'user_role_assignments' => [],
        'user_role_permissions' => [],
        'versions' => [],
        'weather_history_items' => [],
        'work_records' => [],
        'work_record_machine_region_mapping_items' => [],
        'work_types' => [],
        'work_type_groups' => [],
    ];

    public function exists($resource){
        return isset($this->structure[$resource]);
        //return is_array($this->structure[$this->snake($resource)] ?? null);
    }

}
