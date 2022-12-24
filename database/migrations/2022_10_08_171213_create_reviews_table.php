<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('question1');//ما احتمال أن تقوم بالتوصية بنا لصديق أو زميل؟
            $table->text('question2');// ما تقييمك لخدماتنا من حيث الجودة؟
            $table->text('question3');//ما تقييمك لخدماتنا من حيث السرعة؟
            $table->text('question4');//كم مرة تقوم بزيارة الموقع
            $table->text('question5');//هل تلبي خدماتنا توقعاتك؟
            $table->text('phone');//هل تلبي خدماتنا توقعاتك؟
            $table->text('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
