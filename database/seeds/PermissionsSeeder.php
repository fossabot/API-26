<?php

namespace Database\Seeders;

use EscolaLms\AssignWithoutAccount\Database\Seeders\AssignWithoutAccountPermissionSeeder;
use EscolaLms\Auth\Database\Seeders\AuthPermissionSeeder;
use EscolaLms\Cart\Database\Seeders\CartPermissionSeeder;
use EscolaLms\Categories\Database\Seeders\CategoriesPermissionSeeder;
use EscolaLms\Cmi5\Database\Seeders\Cmi5PermissionSeeder;
use EscolaLms\Consultations\Database\Seeders\ConsultationsPermissionSeeder;
use EscolaLms\Core\Seeders\RoleTableSeeder;
use EscolaLms\Courses\Database\Seeders\CoursesPermissionSeeder;
use EscolaLms\CoursesImportExport\Database\Seeders\CoursesExportImportPermissionSeeder;
use EscolaLms\CsvUsers\Database\Seeders\CsvUsersPermissionSeeder;
use EscolaLms\Files\Database\Seeders\PermissionTableSeeder as FilePermissionTableSeeder;
use EscolaLms\HeadlessH5P\Database\Seeders\PermissionTableSeeder as H5PPermissionTableSeeder;
use EscolaLms\Lrs\Database\Seeders\LrsPermissionSeeder;
use EscolaLms\ModelFields\Database\Seeders\PermissionTableSeeder as ModelFieldsPermissionTableSeeder;
use EscolaLms\Notifications\Database\Seeders\NotificationsPermissionsSeeder;
use EscolaLms\Pages\Database\Seeders\PermissionTableSeeder as PagesPermissionTableSeeder;
use EscolaLms\Payments\Database\Seeders\PaymentsPermissionsSeeder;
use EscolaLms\Permissions\Database\Seeders\PermissionTableSeeder as PermissionsPermissionTableSeeder;
use EscolaLms\Questionnaire\Database\Seeders\QuestionnairePermissionsSeeder;
use EscolaLms\Reports\Database\Seeders\ReportsPermissionSeeder;
use EscolaLms\Scorm\Database\Seeders\PermissionTableSeeder as ScormPermissionTableSeeder;
use EscolaLms\Settings\Database\Seeders\PermissionTableSeeder as SettingsPermissionTableSeeder;
use EscolaLms\StationaryEvents\Database\Seeders\StationaryEventPermissionSeeder;
use EscolaLms\Tags\Database\Seeders\TagsPermissionSeeder;
use EscolaLms\Templates\Database\Seeders\PermissionTableSeeder as TemplatesPermissionTableSeeder;
use EscolaLms\TemplatesPdf\Database\Seeders\PermissionTableSeeder as TemplatesPdfPermissionTableSeeder;
use EscolaLms\Tracker\Database\Seeders\TrackerPermissionSeeder;
use EscolaLms\Translations\Database\Seeders\TranslationsPermissionSeeder;
use EscolaLms\Vouchers\Database\Seeders\VoucherPermissionsSeeder;
use EscolaLms\Webinar\Database\Seeders\WebinarsPermissionSeeder;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first populate roles & permissions
        $this->call(RoleTableSeeder::class);
        $this->call(AuthPermissionSeeder::class);
        $this->call(CartPermissionSeeder::class);
        $this->call(FilePermissionTableSeeder::class);
        $this->call(CoursesPermissionSeeder::class);
        $this->call(PaymentsPermissionsSeeder::class);
        $this->call(CategoriesPermissionSeeder::class);
        $this->call(PagesPermissionTableSeeder::class);
        $this->call(ScormPermissionTableSeeder::class);
        $this->call(SettingsPermissionTableSeeder::class);
        $this->call(ReportsPermissionSeeder::class);
        $this->call(CoursesExportImportPermissionSeeder::class);
        $this->call(PermissionsPermissionTableSeeder::class);
        $this->call(NotificationsPermissionsSeeder::class);
        $this->call(TemplatesPermissionTableSeeder::class);
        $this->call(TemplatesPdfPermissionTableSeeder::class);
        $this->call(CsvUsersPermissionSeeder::class);
        $this->call(TagsPermissionSeeder::class);
        $this->call(H5PPermissionTableSeeder::class);
        $this->call(QuestionnairePermissionsSeeder::class);
        $this->call(ConsultationsPermissionSeeder::class);
        $this->call(AssignWithoutAccountPermissionSeeder::class);
        $this->call(StationaryEventPermissionSeeder::class);
        $this->call(WebinarsPermissionSeeder::class);
        $this->call(TrackerPermissionSeeder::class);
        $this->call(ModelFieldsPermissionTableSeeder::class);
        $this->call(VoucherPermissionsSeeder::class);
        $this->call(LrsPermissionSeeder::class);
        $this->call(Cmi5PermissionSeeder::class);
        $this->call(TranslationsPermissionSeeder::class);
    }
}
