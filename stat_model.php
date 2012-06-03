<?php

class stat_model extends CI_Model {	
	
	public function get_stats() {
		$query = $this->db->query("SELECT " .
								  "		c6.ssc, " .
								  "		c1.population AS c1_population, c6.population AS c6_population, c6.population-c1.population AS diff_population, " .
								  "		c1.males AS c1_males, c6.males AS c6_males, c6.males-c1.males AS diff_males, " .
								  "		c1.females AS c1_females, c6.females AS c6_females, c6.females-c1.females AS diff_females, " .
								  "		c1.indigenous AS c1_indigenous, c6.indigenous AS c6_indigenous, c6.indigenous-c1.indigenous AS diff_indigenous, " .
								  " 	c6.median_age AS c6_median_age, " .
								  "		c1.`0-4` AS c1_0_4, c6.`0-4` AS c6_0_4, c6.`0-4`-c1.`0-4` AS diff_0_4, " .
								  "		c1.`5-14` AS c1_5_14, c6.`5-14` AS c6_5_14, c6.`5-14`-c1.`5-14` AS diff_5_14, " .
								  "		c1.`15-24` AS c1_15_24, c6.`15-24` AS c6_15_24, c6.`15-24`-c1.`15-24` AS diff_15_24, " .
								  "		c1.`25-54` AS c1_25_54, c6.`25-54` AS c6_25_54, c6.`25-54`-c1.`25-54` AS diff_25_54, " .
								  "		c1.`55-64` AS c1_55_64, c6.`55-64` AS c6_55_64, c6.`55-64`-c1.`55-64` AS diff_55_64, " .
								  "		c1.`65` AS c1_65, c6.`65` AS c6_65, c6.`65`-c1.`65` AS diff_65, " .
								  "		c1.married AS c1_married, c6.married AS c6_married, c6.married-c1.married AS diff_married, " .
								  "		c1.never_married AS c1_never_married, c6.never_married AS c6_never_married, c6.never_married-c1.never_married AS diff_never_married, " .
								  "		c1.separated_divorced AS c1_divorced, c6.separated_divorced AS c6_divorced, c6.separated_divorced-c1.separated_divorced AS diff_divorced, " .
								  "		c1.widowed AS c1_widowed, c6.widowed AS c6_widowed, c6.widowed-c1.widowed AS diff_widowed, " .
								  "		c1.full_time AS c1_full_time, c6.full_time AS c6_full_time, c6.full_time-c1.full_time AS diff_full_time, " .
								  "		c1.part_time AS c1_part_time, c6.part_time AS c6_part_time, c6.part_time-c1.part_time AS diff_part_time, " .
								  "		c1.unemployed AS c1_unemployed, c6.unemployed AS c6_unemployed, c6.unemployed-c1.unemployed AS diff_unemployed, " .
								  "		c1.total_families AS c1_total_families, c6.total_families AS c6_total_families, c6.total_families-c1.total_families AS diff_total_families, " .
								  "		c1.couple_with_children AS c1_with_kids, c6.couple_with_children AS c6_with_kids, c6.couple_with_children-c1.couple_with_children AS diff_with_kids, " .
								  "		c1.couple_without_children AS c1_without_kids, c6.couple_without_children AS c6_without_kids, c6.couple_without_children-c1.couple_without_children AS diff_without_kids, " .
								  "		c1.single_parent AS c1_single_parent, c6.single_parent AS c6_single_parent, c6.single_parent-c1.single_parent AS diff_single_parent, " .
								  "		c1.fully_owned AS c1_fully_owned, c6.fully_owned AS c6_fully_owned, c6.fully_owned-c1.fully_owned AS diff_fully_owned, " .
								  "		c1.being_purchased AS c1_purchasing, c6.being_purchased AS c6_purchasing, c6.being_purchased-c1.being_purchased AS diff_purchasing, " .
								  "		c1.rented AS c1_rented, c6.rented AS c6_rented, c6.rented-c1.rented AS diff_rented, " .
								  "		c6.median_rent_weekly, c6.median_housing_loan_repayment_monthly, c6.average_household_size, c6.average_num_persons_per_bedroom " .
								  "FROM " .
								  "		census_2006 c6 " .
								  "JOIN census_2001 c1 ON c1.ssc=c6.ssc"); 
		return $query->result();
	}
	
	public function get_state_stats($state) {
		$query = $this->db->query("SELECT " .
								  "		c6.ssc, " .
								  "		c1.population AS c1_population, c6.population AS c6_population, c6.population-c1.population AS diff_population, " .
								  "		c1.males AS c1_males, c6.males AS c6_males, c6.males-c1.males AS diff_males, " .
								  "		c1.females AS c1_females, c6.females AS c6_females, c6.females-c1.females AS diff_females, " .
								  "		c1.indigenous AS c1_indigenous, c6.indigenous AS c6_indigenous, c6.indigenous-c1.indigenous AS diff_indigenous, " .
								  " 	c6.median_age AS c6_median_age, " .
								  "		c1.`0-4` AS c1_0_4, c6.`0-4` AS c6_0_4, c6.`0-4`-c1.`0-4` AS diff_0_4, " .
								  "		c1.`5-14` AS c1_5_14, c6.`5-14` AS c6_5_14, c6.`5-14`-c1.`5-14` AS diff_5_14, " .
								  "		c1.`15-24` AS c1_15_24, c6.`15-24` AS c6_15_24, c6.`15-24`-c1.`15-24` AS diff_15_24, " .
								  "		c1.`25-54` AS c1_25_54, c6.`25-54` AS c6_25_54, c6.`25-54`-c1.`25-54` AS diff_25_54, " .
								  "		c1.`55-64` AS c1_55_64, c6.`55-64` AS c6_55_64, c6.`55-64`-c1.`55-64` AS diff_55_64, " .
								  "		c1.`65` AS c1_65, c6.`65` AS c6_65, c6.`65`-c1.`65` AS diff_65, " .
								  "		c1.married AS c1_married, c6.married AS c6_married, c6.married-c1.married AS diff_married, " .
								  "		c1.never_married AS c1_never_married, c6.never_married AS c6_never_married, c6.never_married-c1.never_married AS diff_never_married, " .
								  "		c1.separated_divorced AS c1_divorced, c6.separated_divorced AS c6_divorced, c6.separated_divorced-c1.separated_divorced AS diff_divorced, " .
								  "		c1.widowed AS c1_widowed, c6.widowed AS c6_widowed, c6.widowed-c1.widowed AS diff_widowed, " .
								  "		c1.full_time AS c1_full_time, c6.full_time AS c6_full_time, c6.full_time-c1.full_time AS diff_full_time, " .
								  "		c1.part_time AS c1_part_time, c6.part_time AS c6_part_time, c6.part_time-c1.part_time AS diff_part_time, " .
								  "		c1.unemployed AS c1_unemployed, c6.unemployed AS c6_unemployed, c6.unemployed-c1.unemployed AS diff_unemployed, " .
								  "		c1.total_families AS c1_total_families, c6.total_families AS c6_total_families, c6.total_families-c1.total_families AS diff_total_families, " .
								  "		c1.couple_with_children AS c1_with_kids, c6.couple_with_children AS c6_with_kids, c6.couple_with_children-c1.couple_with_children AS diff_with_kids, " .
								  "		c1.couple_without_children AS c1_without_kids, c6.couple_without_children AS c6_without_kids, c6.couple_without_children-c1.couple_without_children AS diff_without_kids, " .
								  "		c1.single_parent AS c1_single_parent, c6.single_parent AS c6_single_parent, c6.single_parent-c1.single_parent AS diff_single_parent, " .
								  "		c1.fully_owned AS c1_fully_owned, c6.fully_owned AS c6_fully_owned, c6.fully_owned-c1.fully_owned AS diff_fully_owned, " .
								  "		c1.being_purchased AS c1_purchasing, c6.being_purchased AS c6_purchasing, c6.being_purchased-c1.being_purchased AS diff_purchasing, " .
								  "		c1.rented AS c1_rented, c6.rented AS c6_rented, c6.rented-c1.rented AS diff_rented, " .
								  "		c6.median_rent_weekly, c6.median_housing_loan_repayment_monthly, c6.average_household_size, c6.average_num_persons_per_bedroom " .
								  "FROM " .
								  "		census_2006 c6 " .
								  "JOIN census_2001 c1 ON c1.ssc=c6.ssc " .
								  "JOIN location_suburbs ls ON ls.ssc=c1.ssc AND ls.ssc=c6.ssc " .
								  "WHERE ls.state='$state'"); 
		return $query->result();
	}	
	
	public function get_ranks($year, $order_by) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, c.ssc " .
								  "FROM census_$year c, (SELECT @rownum:=0) r " .
								  "ORDER BY $order_by DESC");
		return $query->result();
	}
	
	public function get_state_ranks($year, $order_by, $state) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, c.ssc " .
								  "FROM census_$year c, (SELECT @rownum:=0) r " .
								  "WHERE c.ssc IN " .
								  "(" .
								  "		SELECT ssc FROM location_suburbs WHERE state='$state'" .
								  ")" .
								  "ORDER BY $order_by DESC");
		return $query->result();
	}	
	
	public function get_diff_ranks($order_by) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, c6.ssc  " .
								  "FROM census_2006 c6, census_2001 c1, (SELECT @rownum:=0) r " .
								  "WHERE c6.ssc=c1.ssc ORDER BY c6.$order_by-c1.$order_by DESC ");
		return $query->result();		
	}
	
	public function get_diff_state_ranks($order_by, $state) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, c6.ssc  " .
								  "FROM census_2006 c6, census_2001 c1, (SELECT @rownum:=0) r " .
								  "WHERE c6.ssc=c1.ssc AND " .
								  "c6.ssc IN " .
								  "(" .
								  "		SELECT ssc FROM location_suburbs WHERE state='$state'" .
								  ")" .
								  "ORDER BY c6.$order_by-c1.$order_by DESC ");
		return $query->result();		
	}
	
	public function get_all_languages() {
		$query = $this->db->query("SELECT DISTINCT language FROM census_2006_languages_spoken");
		return $query->result();
	}
	
	public function get_language_ranks($language, $year) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, langs.ssc  " .
								  "FROM census_" . $year . "_languages_spoken langs, (SELECT @rownum:=0) r " .
								  "WHERE langs.language='$language' ORDER BY region DESC");
		return $query->result();								  
	}
	
	public function get_all_religions() {
		$query = $this->db->query("SELECT DISTINCT religion FROM census_2006_religions");
		return $query->result();
	}
	
	public function get_religion_ranks($religion, $year) {
		$query = $this->db->query("SELECT @rownum:=@rownum+1 AS rank, religions.ssc  " .
								  "FROM census_" . $year . "_religions religions, (SELECT @rownum:=0) r " .
								  "WHERE religions.religion='$religion' ORDER BY region DESC");
		return $query->result();								  
	}	
}
?>