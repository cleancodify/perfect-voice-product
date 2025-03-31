<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyDetailsToProfiles extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('bio');
            $table->string('company_website')->nullable()->after('company_name');
            $table->string('address')->nullable()->after('company_website');
            $table->string('billing_address')->nullable()->after('address');
            $table->string('city')->nullable()->after('billing_address');
            $table->string('state')->nullable()->after('city'); // State or province
            $table->string('zip')->nullable()->after('state');
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn([
                'company_name',
                'company_website',
                'address',
                'billing_address',
                'city',
                'state',
                'zip'
            ]);
        });
    }
}
