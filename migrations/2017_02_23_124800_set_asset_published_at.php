<?php

use BoomCMS\Database\Models\Asset;
use BoomCMS\FileInfo\Facade as FileInfo;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\HttpFoundation\File\File;

class SetAssetPublishedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $assets = Asset::all();

        foreach ($assets as $asset) {
            $path = storage_path().'/boomcms/assets/'.$asset->getLatestVersion()->id;

            if (is_readable($path)) {
                $info = FileInfo::create(new File($path));

                if (empty($asset->getDescription())) {
                    $asset->setDescription($info->getDescription());
                }

                if (empty($asset->getCredits())) {
                    $asset->setCredits($info->getCopyright());
                }

                $created = $info->getCreatedAt();

                if ($created) {
                    $asset->setPublishedAt();
                }

                $asset->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
