<?php
class ModelCatalogCategory extends Model {
	public function getCategory($category_id,$depart_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1' AND `depart_id` = '".$depart_id."' ");
  		return $query->row;
	}

	public function getCategoryOri($category_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1' ");
  		return $query->row;
	}

	public function getCategories($parent_id = 0,$depart_id=0) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' AND c.depart_id='".$depart_id."' ORDER BY c.sort_order, LCASE(cd.name)");
		return $query->rows;
	}

	public function getCategoryFilters($category_id) {
		$implode = array();

		$query = $this->db->query("SELECT filter_id FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$implode[] = (int)$result['filter_id'];
		}

		$filter_group_data = array();

		if ($implode) {
			$filter_group_query = $this->db->query("SELECT DISTINCT f.filter_group_id, fgd.name, fg.sort_order FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_group fg ON (f.filter_group_id = fg.filter_group_id) LEFT JOIN " . DB_PREFIX . "filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND fgd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY f.filter_group_id ORDER BY fg.sort_order, LCASE(fgd.name)");

			foreach ($filter_group_query->rows as $filter_group) {
				$filter_data = array();

				$filter_query = $this->db->query("SELECT DISTINCT f.filter_id, fd.name FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND f.filter_group_id = '" . (int)$filter_group['filter_group_id'] . "' AND fd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.sort_order, LCASE(fd.name)");

				foreach ($filter_query->rows as $filter) {
					$filter_data[] = array(
						'filter_id' => $filter['filter_id'],
						'name'      => $filter['name']
					);
				}

				if ($filter_data) {
					$filter_group_data[] = array(
						'filter_group_id' => $filter_group['filter_group_id'],
						'name'            => $filter_group['name'],
						'filter'          => $filter_data
					);
				}
			}
		}

		return $filter_group_data;
	}

	public function getCategoryLayoutId($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getTotalCategoriesByCategoryId($parent_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row['total'];
	}

    public function getDepartments() {
        $query = $this->db->query("SELECT * FROM ". DB_PREFIX . "department d  WHERE status = '1'");

        return $query->rows;
    }
    public function getDepartment($depart_id) {
        $query = $this->db->query("SELECT * FROM ". DB_PREFIX . "department d  WHERE id = '".$depart_id."'");

        return $query->row;
    }

    public function getDepartmentCategory($depart_id,$filter= array()) {
	    $sql = " SELECT * FROM ".DB_PREFIX."category c INNER JOIN ".DB_PREFIX."category_description cd ON c.category_id = cd.category_id WHERE depart_id ='".$depart_id."'  AND c.status=1 ";
        if(isset($filter['parent_id'])){
            $sql .= " AND parent_id=0 ";
        }
        if(isset($filter['custom'])){
            $sql .= " OR c.category_id  IN (".$filter['custom'].") ";
        }

        $sql .= " ORDER BY c.sort_order ";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getCategoryCategory($id) {
        $product_data = array();

        $query = $this->db->query(" SELECT * FROM " . DB_PREFIX . "category_to_category ");

        foreach ($query->rows as $result) {
            $product_data[$result['id']] = $this->getProduct($result['related_id']);
        }

        return $product_data;
    }
    public function getCategoryProductId($product_id,$all = false) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' ORDER BY `category_id` DESC ");

        if ($query->num_rows) {
            if(!$all){
                return (int)$query->row['category_id'];
            } else {
                return $query->rows;
            }
        } else {
            return 0;
        }
    }

    public function getCategoryContent($category_id){
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_content WHERE category_id = '" . (int)$category_id . "'");
        return $sql->rows;
    }



}