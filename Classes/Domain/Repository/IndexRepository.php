<?php
/**
 * @todo       General file information
 *
 * @category   Extension
 * @package    Hdnet
 * @subpackage ...
 * @author     Tim Lochmüller <tim.lochmueller@hdnet.de>
 */

namespace HDNET\Calendarize\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @todo       General class information
 *
 * @package    Hdnet
 * @subpackage ...
 * @author     Tim Lochmüller <tim.lochmueller@hdnet.de>
 */
class IndexRepository extends Repository {

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
	 */
	public function createQuery() {
		$query = parent::createQuery(); // TODO: Change the autogenerated stub
		$query->getQuerySettings()
			->setRespectStoragePage(FALSE);
		return $query;
	}

	public function findList() {
		return $this->findAll();
	}

	public function findYear() {
		return $this->findAll();
	}

	public function findMonth() {
		return $this->findAll();
	}

	public function dayAction() {
		return $this->findAll();
	}

	public function findDay() {
		return $this->findAll();
	}
}