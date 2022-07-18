<?php

use App\Post;

use App\Category;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

      $category1 = Category::create([
        'name' => 'News'
      ]);

      $category2 = Category::create([
        'name' => 'Marketing'
      ]);
        //
        $post1 = Post::create([
          'title' => 'We relocated our office to a new designed garage',
          'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
          'category_id' => $category1->id,
          'image' => 'post/1.jpg'
        ]);

        $post2 = Post::create([
          'title' => 'Top 5 brilliant content marketing strategies',
          'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled',
          'category_id' => $category2->id,
          'image' => 'post/2.jpg'
        ]);

        $tag1 = Tag::create([
          'name' => 'News'
        ]);

        $tag2 = Tag::create([
          'name' => 'Marketing'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag2->id]);
    }
}
