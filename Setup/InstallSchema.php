<?php
/**
 * Abstract storage layer for translations by token
 * Copyright (C) 2016  The community
 *
 * This file is part of Hackathon/Translationstorage.
 *
 * Hackathon/Translationstorage is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Hackathon\Translationstorage\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

	public function install(
		SchemaSetupInterface $setup,
		ModuleContextInterface $context
	){
		$installer = $setup;
		$installer->startSetup();

		$table = $setup->getConnection()->newTable($setup->getTable('hackathon_strings'));

		$table->addColumn(
			'strings_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
			'Entity ID'
		);

		$table->addColumn(
			'token',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			null,
			['identity' => true],
			'token'
		);

		$table->addColumn(
			'source',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			null,
			[],
			'source'
		);

		$table->addColumn(
			'context',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			null,
			[],
			'context'
		);

		$table->addColumn(
			'translation',
			\Magento\Framework\DB\Ddl\Table::TYPE_BLOB,
			null,
			[],
			'translation'
		);

		$table->addColumn(
			'locale',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			null,
			[],
			'locale'
		);

		$table->addIndex(
			$installer->getIdxName(
				'token_locale_identifier',
				[ 'token', 'locale' ],
				AdapterInterface::INDEX_TYPE_UNIQUE
			),
			[ 'token', 'locale' ],
			[ 'type' => AdapterInterface::INDEX_TYPE_UNIQUE ]
		);

		$setup->getConnection()->createTable($table);

		$setup->endSetup();
	}
}
