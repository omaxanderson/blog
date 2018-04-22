<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
          'id'=>1,
          'title'=>'My First Post',
          'abstract'=>'Here\'s an abstract.',
          'content'=>'Here\'s all kinds of content, here we go nice look at all these words quite a post',
          'created_at'=>'2018-04-01',
          'user_id'=>1,
          'views'=>0,
          'read_time'=>1
        ]);
        DB::table('posts')->insert([
          'id'=>22,
          'title'=>'Hello World',
          'abstract'=>'Test post with some random words hello there how\'s it going??',
          'content'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget tempus lorem, ut semper odio. Suspendisse sit amet dictum lorem. Duis rutrum felis sed venenatis varius. Donec lacinia suscipit eros, quis volutpat est. In mollis luctus diam, non maximus est laoreet eu. Integer vulputate velit felis. Nullam dapibus euismod libero id congue. Praesent dignissim elit ut felis semper, ac sodales nibh varius. Suspendisse sodales sed orci at lobortis. Nunc ut commodo libero. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id neque imperdiet, accumsan mauris eu, pulvinar sem. Quisque ultricies, leo quis vehicula placerat, turpis ex rhoncus ligula, ac rhoncus est ligula vitae quam. Pellentesque vehicula accumsan mauris ac porta.</p>

<p>Maecenas vel dignissim dui. Sed congue risus vitae massa hendrerit congue. Vestibulum sodales bibendum euismod. Nulla dapibus, arcu a fermentum placerat, lectus velit fermentum est, a rhoncus nulla leo scelerisque mauris. Phasellus vehicula elementum ornare. Nullam eu felis sollicitudin, sollicitudin sem eget, varius dolor. Sed ut neque sapien. Donec blandit ex id maximus tempus. Fusce fermentum massa non libero viverra, in sagittis turpis lacinia. Aenean ullamcorper sed lacus et faucibus. Donec sodales velit vel nibh cursus, tempor varius lorem fringilla. Suspendisse vitae nibh in dui auctor facilisis eu cursus urna. Vivamus blandit congue sagittis.</p>

<p>Sed condimentum quis ex non tincidunt. Nullam ultricies pulvinar ex, nec bibendum tortor consectetur vitae. Integer pretium neque ligula, et mattis massa posuere in. Quisque in diam id sem aliquet tincidunt vitae vitae diam. Nullam vitae nunc consectetur, dapibus metus et, volutpat dui. Maecenas et pellentesque lectus. Vestibulum quis ipsum aliquet, faucibus sem sed, fermentum nulla. Nam in vulputate ipsum, et molestie nunc. Pellentesque eu scelerisque lorem. Vivamus sodales tortor diam, id volutpat arcu rutrum non.</p>

<p>Quisque ac tincidunt mi. Curabitur luctus metus nec lorem consectetur, quis mattis mauris mollis. Maecenas ut pretium tellus. Etiam sit amet hendrerit purus. Vestibulum orci nunc, blandit euismod convallis at, suscipit eu nisl. Ut rhoncus quam nibh, rutrum luctus libero molestie vel. Aliquam viverra ornare sapien, quis posuere est elementum at. Ut tempus rhoncus risus varius vulputate. Curabitur eleifend ligula libero, vitae commodo tortor tempor eget. Donec consequat, leo a malesuada tempus, ligula sem tincidunt nibh, luctus faucibus ligula lectus ut lectus. Pellentesque ut orci at augue malesuada gravida ac eu purus.</p>

<p>Curabitur volutpat diam felis, at hendrerit nulla pretium ac. Donec mollis ante eu facilisis scelerisque. In eget gravida ante, ac varius massa. Donec ullamcorper feugiat mi, non finibus risus pharetra sed. Sed imperdiet, nisl vel sagittis rhoncus, nisl tortor posuere dolor, in tempus risus metus quis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed convallis justo felis, eu condimentum odio laoreet eleifend. Ut sed diam a purus faucibus malesuada. Nam nec commodo erat.</p>',
          'created_at'=>'2018-04-02',
          'user_id'=>1,
          'views'=>0,
          'read_time'=>3
        ]);
        DB::table('posts')->insert([
          'id'=>3,
          'title'=>'My Third Post',
          'abstract'=>'This here\'s my third post!',
          'content'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget tempus lorem, ut semper odio. Suspendisse sit amet dictum lorem. Duis rutrum felis sed venenatis varius. Donec lacinia suscipit eros, quis volutpat est. In mollis luctus diam, non maximus est laoreet eu. Integer vulputate velit felis. Nullam dapibus euismod libero id congue. Praesent dignissim elit ut felis semper, ac sodales nibh varius. Suspendisse sodales sed orci at lobortis. Nunc ut commodo libero. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id neque imperdiet, accumsan mauris eu, pulvinar sem. Quisque ultricies, leo quis vehicula placerat, turpis ex rhoncus ligula, ac rhoncus est ligula vitae quam. Pellentesque vehicula accumsan mauris ac porta.</p>

<p>Maecenas vel dignissim dui. Sed congue risus vitae massa hendrerit congue. Vestibulum sodales bibendum euismod. Nulla dapibus, arcu a fermentum placerat, lectus velit fermentum est, a rhoncus nulla leo scelerisque mauris. Phasellus vehicula elementum ornare. Nullam eu felis sollicitudin, sollicitudin sem eget, varius dolor. Sed ut neque sapien. Donec blandit ex id maximus tempus. Fusce fermentum massa non libero viverra, in sagittis turpis lacinia. Aenean ullamcorper sed lacus et faucibus. Donec sodales velit vel nibh cursus, tempor varius lorem fringilla. Suspendisse vitae nibh in dui auctor facilisis eu cursus urna. Vivamus blandit congue sagittis.</p>

<p>Sed condimentum quis ex non tincidunt. Nullam ultricies pulvinar ex, nec bibendum tortor consectetur vitae. Integer pretium neque ligula, et mattis massa posuere in. Quisque in diam id sem aliquet tincidunt vitae vitae diam. Nullam vitae nunc consectetur, dapibus metus et, volutpat dui. Maecenas et pellentesque lectus. Vestibulum quis ipsum aliquet, faucibus sem sed, fermentum nulla. Nam in vulputate ipsum, et molestie nunc. Pellentesque eu scelerisque lorem. Vivamus sodales tortor diam, id volutpat arcu rutrum non.</p>

<p>Quisque ac tincidunt mi. Curabitur luctus metus nec lorem consectetur, quis mattis mauris mollis. Maecenas ut pretium tellus. Etiam sit amet hendrerit purus. Vestibulum orci nunc, blandit euismod convallis at, suscipit eu nisl. Ut rhoncus quam nibh, rutrum luctus libero molestie vel. Aliquam viverra ornare sapien, quis posuere est elementum at. Ut tempus rhoncus risus varius vulputate. Curabitur eleifend ligula libero, vitae commodo tortor tempor eget. Donec consequat, leo a malesuada tempus, ligula sem tincidunt nibh, luctus faucibus ligula lectus ut lectus. Pellentesque ut orci at augue malesuada gravida ac eu purus.</p>

<p>Curabitur volutpat diam felis, at hendrerit nulla pretium ac. Donec mollis ante eu facilisis scelerisque. In eget gravida ante, ac varius massa. Donec ullamcorper feugiat mi, non finibus risus pharetra sed. Sed imperdiet, nisl vel sagittis rhoncus, nisl tortor posuere dolor, in tempus risus metus quis lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed convallis justo felis, eu condimentum odio laoreet eleifend. Ut sed diam a purus faucibus malesuada. Nam nec commodo erat.</p>',
          'created_at'=>'2018-04-03',
          'user_id'=>1,
          'views'=>0,
          'read_time'=>3
        ]);

    }
}
