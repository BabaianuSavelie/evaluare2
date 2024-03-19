<section class="my-10">
   <div class="container text-center">
       <h1 class="text-3xl">Exemple de lucrari</h1>

       <div class="flex justify-between items-center mt-10">
          @foreach($projects as $project)
              <x-card :project="$project"/>
          @endforeach
       </div>
   </div>
</section>
