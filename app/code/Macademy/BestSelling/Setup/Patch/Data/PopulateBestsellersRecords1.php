<?php
namespace Macademy\BestSelling\Setup\Patch\Data;

use Macademy\BestSelling\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;
use Macademy\BestSelling\Model\Sales\Bestsellers as BestsellersModel;
use Macademy\BestSelling\Model\Sales\BestsellersFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBestsellersRecords1 implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    protected $moduleDataSetup;

    /** @var BestsellersResourceModel */
    protected $bestsellersResource;

    /** @var BestsellersFactory */
    protected $bestsellersFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BestsellersResourceModel $bestsellersResource,
        BestsellersFactory $bestsellersFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->bestsellersResource = $bestsellersResource;
        $this->bestsellersFactory = $bestsellersFactory;
    }

    /**
     * Get array of patches that have to be executed prior to this.
     *
     * Example of implementation:
     *
     * [
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch1::class,
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch2::class
     * ]
     *
     * @return string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Get aliases (previous names) for the patch.
     *
     * @return string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Run code inside patch
     * If code fails, patch must be reverted, in case when we are speaking about schema - then under revert
     * means run PatchInterface::revert()
     *
     * If we speak about data, under revert means: $transaction->rollback()
     *
     * @return $this
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function apply()
    {
        $setup = $this->moduleDataSetup;
        $setup->startSetup();

        /** @var BestsellersModel $bestsellers */
        $bestsellers = $this->bestsellersFactory->create();
        $data = [
            'id' => 5,
            'is_featured' => true,
        ];
        $bestsellers->setData($data);
        $this->bestsellersResource->save($bestsellers);

        $setup->endSetup();
    }
}
