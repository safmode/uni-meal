public function up()
{
    Schema::create('shippings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id');
        $table->string('name');
        $table->string('phone');
        $table->text('address');
        $table->timestamps();

        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
    });
}
