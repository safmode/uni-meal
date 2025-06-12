Schema::create('order_items', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('order_id');
    $table->string('name');
    $table->string('image');
    $table->decimal('price', 8, 2);
    $table->integer('quantity');
    $table->timestamps();
});
