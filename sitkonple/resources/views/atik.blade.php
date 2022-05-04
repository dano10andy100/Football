

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
  <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:ital,wght@0,100;1,100&display=swap"
   rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
{{-- paj lan divize an 3 pati:
   premye pati an c pati kote map mete ............. --}}
   <body class=" font-poppins text-gray-700">
    <main class="py-12 bg-gray-100 min-h-screen">
    
       <div class="container mx-auto px-4 flex">
          {{-- premye pati an m gen branch ki gen............ --}}
          <div class="w-3/12 ">
             <div class="bg-white shadow-sm rounded-sm p-4">
                    <h3 class="text-xl font-semibold text-gray-900 font-roboto mb-3"> Kategori</h3>
                       <div class="text-gray-700 space-y-2">
                          <a href="#" class="flex items-center font-semibold leading-4 text-gray-700  hover:text-blue-700 transition">
                     <span class="mr-2"> <i class="far fa-folder-open"></i></span>
                     <span> videyo</span>
                     <span class="font-normal ml-auto">(12)</span>
                      </a>
                        <a href="#" class="flex items-center font-semibold leading-4 text-gray-700   hover:text-blue-700 transition">
                   <span class="mr-2"> <i class="far fa-folder-open"></i></span>
                   <span> pwogramasyon</span>
                   <span class="font-normal ml-auto">(62)</span>
                     </a>
                     <a href="#" class="flex items-center font-semibold leading-4 text-gray-700  hover:text-blue-700 transition">
                   <span class="mr-2"> <i class="far fa-folder-open"></i></span>
                   <span> Atik</span>
                   <span class="font-normal ml-auto">(72)</span>
                      </a>
                    <a href="#" class="flex items-center font-semibold leading-4 text-gray-700  hover:text-blue-700 transition">
                   <span class="mr-2"> <i class="far fa-folder-open"></i></span>
                   <span> Interview</span>
                   <span class="font-normal ml-auto">(112)</span>
                     </a>
                        <a href="#" class="flex items-center font-semibold leading-4 text-gray-700  hover:text-blue-700 transition">
                          <span class="mr-2"> <i class="far fa-folder-open"></i></span>
                        <span> bilan</span>
                       <span class="font-normal ml-auto">(10)</span>
                      </a>
                   </div>
                </div>
    {{-- pati ki gen tout atik aleyatwa yo --}}
                <div class="bg-white shadow-sm rounded-sm p-4 mt-8">
                   <h3 class="text-xl font-semibold text-gray-900 font-roboto mb-3"> Atik Aleyatwa</h3>
                   <div class="space-y-4">
                      <a href="" class="flex group">
                         <div class="flex-shrink-0">
                            <img src="{{ asset('imaj/football.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                         </div>
                         <div class="flex-grow pl-3">
                            <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                               Le VAC a largement domine l'ASM
                            </h5>
                            <div class="flex text-gray-400 text-sm items-center">
                               <span class="mr-1 text-xs">
                                    <i class="far fa-clock"> </i>
                               </span>
                               12 mars, 2022
                            </div>
                         </div>
                      </a>
                      <a href="" class="flex group">
                         <div class="flex-shrink-0">
                            <img src="{{ asset('imaj/aiglenoir.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                         </div>
                         <div class="flex-grow pl-3">
                            <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                               L'aigle noir du bel air
                            </h5>
                            <div class="flex text-gray-400 text-sm items-center">
                               <span class="mr-1 text-xs">
                                    <i class="far fa-clock"> </i>
                               </span>
                               14 mars, 2022
                            </div>
                         </div>
                      </a>
                      <a href="" class="flex group">
                         <div class="flex-shrink-0">
                            <img src="{{ asset('imaj/derby.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                         </div>
                         <div class="flex-grow pl-3">
                            <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                               Le derby etait chaleureux, le score 2 buts partout
                            </h5>
                            <div class="flex text-gray-400 text-sm items-center">
                               <span class="mr-1 text-xs">
                                    <i class="far fa-clock"> </i>
                               </span>
                               15 mars, 2022
                            </div>
                         </div>
                      </a>
                      <a href="" class="flex group">
                         <div class="flex-shrink-0">
                            <img src="{{ asset('imaj/real.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                         </div>
                         <div class="flex-grow pl-3">
                            <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                               Le real hope du cap, l'equipe invaincu du tournoi
                            </h5>
                            <div class="flex text-gray-400 text-sm items-center">
                               <span class="mr-1 text-xs">
                                    <i class="far fa-clock"> </i>
                               </span>
                               11 mars, 2022
                            </div>
                         </div>
                      </a>
                      <a href="" class="flex group">
                         <div class="flex-shrink-0">
                            <img src="{{ asset('imaj/tempete.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                         </div>
                         <div class="flex-grow pl-3">
                            <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                               Le tempete de saint marc, la belle colonne a domine le don bosco deux buts a zero
                            </h5>
                            <div class="flex text-gray-400 text-sm items-center">
                               <span class="mr-1 text-xs">
                                    <i class="far fa-clock"> </i>
                               </span>
                               12 mars, 2022
                            </div>
                         </div>
                      </a>
                   </div>
              </div>
             </div>
        
         {{--  pati ki pi gwo an ki gen atik prensipal paj lan --}}
       
         <div class="w-6/12 mx-6">
           <div class=" flex justify-between bg-white px-3 py-2 items-center rounded-sm mb-4">
              <h5 class="text-base uppercase font-semibold font-roboto"> Football</h5>
              <a href="" class="text-white bg-blue-500 px-3 py-1 rounded-sm uppercase text-sm hover:bg-transparent transition hover:text-blue-500 border border-blue-500"> we plis</a>
           </div>
           <div class=" bg-white shadow-sm rounded-sm">
               <a href="" class="overflow-hidden block">
                  <img src="{{ asset('imaj/football.jpg') }}" alt="" class="w-full h-96 object-cover rounded transform hover:scale-110">
               </a>
               <div class="p-4">
                   <a href="">
                      <h5 class="text-2xl font-semiblod text-gray-900 font-roboto hover:text-blue-500">
                         le VAC a largement domine l'equipe de l'ASM sur le score sans appel de 10 buts a zero..
                      </h5>
                   </a>
                   <p class="text-gray-500 text-sm">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequuntur itaque obcaecati tempore ducimus. Animi esse aperiam porro 
                      sed adipisci blanditiis consequatur nam enim accusamus vitae ex..........
                   </p>
                   <div class="flex mt-3 space-x-5">
                      <div class="flex items-center text-gray-400 text-sm">
                           <span class="mr-2 text-xs">
                                <i class="far fa-user"> </i>
                           </span>
                           Andy LAGUERRE
                      </div>
                      <div class="flex items-center text-gray-400 text-sm">
                         <span class="mr-2 text-xs">
                              <i class="far fa-clock"> </i>
                         </span>
                         12 avril, 2022
                    </div>
                    <div class="flex items-center text-gray-400 text-sm">
                      <span class="mr-2 text-xs">
                         <i class="far fa-eye"></i>
                      </span>
                      1024
                 </div>
    
                   </div>
               </div>
                        {{-- seksyon anba atik yo  --}}
    
                   <div class="grid grid-cols-2 gap-4 mt-4">
                      <div class="bg-white p-4 shadow-sm rounded-sm">
                                <a href="" class="overflow-hidden block">
                                   <img src="{{ asset('imaj/baltimore.jpg') }}" alt="" class="w-full h-60 object-cover rounded transform hover:scale-110">
                                 </a>
    
    
                        <div class="mt-3">
    
                            <a href="">
                                     <h2 class=" text-2xl font-semiblod text-gray-900 font-roboto hover:text-blue-500">
                                       les saints marcois du baltimore ont eu chaud mais.......
                                      </h2>
                            </a>
    
                              <div class="flex mt-2 space-x-5">
                               <div class="flex items-center text-gray-400 text-sm">
                                  <span class="mr-2 text-xs">
                                       <i class="far fa-user"> </i>
                                  </span>
                                  Andy LAGUERRE
                             </div>
                             <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                     <i class="far fa-clock"> </i>
                                </span>
                                12 avril, 2022
                           </div>
                           <div class="flex items-center text-gray-400 text-sm">
                             <span class="mr-2 text-xs">
                                <i class="far fa-eye"></i>
                             </span>
                             1024
                        </div>         
                                            
                               </div>
                         </div>
    
                        </div>
                        {{--  --}}
                        <div class="bg-white p-4 shadow-sm rounded-sm">
                         <a href="" class="overflow-hidden block">
                            <img src="{{ asset('imaj/real.jpg') }}" alt="" class="w-full h-60 object-cover rounded transform hover:scale-110">
                          </a>
    
    
                 <div class="mt-3">
    
                     <a href="">
                              <h2 class=" text-2xl font-semiblod text-gray-900 font-roboto hover:text-blue-500">
                               Le real hope du cap, l'equipe intenable du chanpionnat
                               </h2>
                     </a>
    
                       <div class="flex mt-2 space-x-5">
                        <div class="flex items-center text-gray-400 text-sm">
                           <span class="mr-2 text-xs">
                                <i class="far fa-user"> </i>
                           </span>
                           Joseph Medjine
                      </div>
                      <div class="flex items-center text-gray-400 text-sm">
                         <span class="mr-2 text-xs">
                              <i class="far fa-clock"> </i>
                         </span>
                         22 avril, 2022
                    </div>
                    <div class="flex items-center text-gray-400 text-sm">
                      <span class="mr-2 text-xs">
                         <i class="far fa-eye"></i>
                      </span>
                      1024
                 </div>         
                                     
                        </div>
                  </div>
    
                 </div>
                 <div class="bg-white p-4 shadow-sm rounded-sm">
                   <a href="" class="overflow-hidden block">
                      <img src="{{ asset('imaj/aiglenoir.jpg') }}" alt="" class="w-full h-60 object-cover rounded transform hover:scale-110">
                    </a>
    
    
           <div class="mt-3">
    
               <a href="">
                        <h2 class=" text-2xl font-semiblod text-gray-900 font-roboto hover:text-blue-500">
                          les verts et noir ont eu du succes ce soir, mais le jeu n'etait pas fluide
                         </h2>
               </a>
    
                 <div class="flex mt-2 space-x-5">
                  <div class="flex items-center text-gray-400 text-sm">
                     <span class="mr-2 text-xs">
                          <i class="far fa-user"> </i>
                     </span>
                     Jhonny the best
                </div>
                <div class="flex items-center text-gray-400 text-sm">
                   <span class="mr-2 text-xs">
                        <i class="far fa-clock"> </i>
                   </span>
                   15 avril, 2022
              </div>
              <div class="flex items-center text-gray-400 text-sm">
                <span class="mr-2 text-xs">
                   <i class="far fa-eye"></i>
                </span>
                1024
           </div>         
                               
                  </div>
            </div>
    
           </div>
           <div class="bg-white p-4 shadow-sm rounded-sm">
             <a href="" class="overflow-hidden block">
                <img src="{{ asset('imaj/vac.jpg') }}" alt="" class="w-full h-60 object-cover rounded transform hover:scale-110">
              </a>
    
    
     <div class="mt-3">
    
         <a href="">
                  <h2 class=" text-2xl font-semiblod text-gray-900 font-roboto hover:text-blue-500">
                    performance XLXX du VAC.......
                   </h2>
         </a>
    
           <div class="flex mt-2 space-x-5">
            <div class="flex items-center text-gray-400 text-sm">
               <span class="mr-2 text-xs">
                    <i class="far fa-user"> </i>
               </span>
               Jhonny The Best
          </div>
          <div class="flex items-center text-gray-400 text-sm">
             <span class="mr-2 text-xs">
                  <i class="far fa-clock"> </i>
             </span>
             12 avril, 2022
        </div>
        <div class="flex items-center text-gray-400 text-sm">
          <span class="mr-2 text-xs">
             <i class="far fa-eye"></i>
          </span>
          1024
     </div>         
                         
            </div>
      </div>
    
     </div>
                    </div>
    
    
    
    
    
           </div>
          
          </div>
    
          {{-- pati ki gen atik popile yo --}}
          <div class="w-3/12">
             <div class="bg-white shadow-sm rounded-sm p-4">
                <h3 class="text-xl font-semibold text-gray-900 font-roboto mb-3"> Rezo Sosyal</h3>
                <div class="flex space-x-5">
                   <a href="" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                      <i class="fab fa-facebook-f"></i>
                   </a>
                   <a href="" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                      <i class="fab fa-twitter"></i>
                   </a>
                   <a href="" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                      <i class="fab fa-instagram"></i>
                   </a>
                   <a href="" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                      <i class="fab fa-youtube"></i>
                   </a>
                </div>
             </div>
          
             <div class="bg-white shadow-sm rounded-sm p-4 mt-8">
    
                <h3 class="text-xl font-semibold text-gray-900 font-roboto mb-3"> Atik Popile</h3>
                <div class="space-y-4">
                   <a href="" class="flex group">
                      <div class="flex-shrink-0">
                         <img src="{{ asset('imaj/football.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                      </div>
                      <div class="flex-grow pl-3">
                         <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                            Le VAC a largement domine l'ASM
                         </h5>
                         <div class="flex text-gray-400 text-sm items-center">
                            <span class="mr-1 text-xs">
                                 <i class="far fa-clock"> </i>
                            </span>
                            12 mars, 2022
                         </div>
                      </div>
                   </a>
                   <a href="" class="flex group">
                      <div class="flex-shrink-0">
                         <img src="{{ asset('imaj/aiglenoir.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                      </div>
                      <div class="flex-grow pl-3">
                         <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                            L'aigle noir du bel air
                         </h5>
                         <div class="flex text-gray-400 text-sm items-center">
                            <span class="mr-1 text-xs">
                                 <i class="far fa-clock"> </i>
                            </span>
                            14 mars, 2022
                         </div>
                      </div>
                   </a>
                   <a href="" class="flex group">
                      <div class="flex-shrink-0">
                         <img src="{{ asset('imaj/derby.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                      </div>
                      <div class="flex-grow pl-3">
                         <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                            Le derby etait chaleureux, le score 2 buts partout
                         </h5>
                         <div class="flex text-gray-400 text-sm items-center">
                            <span class="mr-1 text-xs">
                                 <i class="far fa-clock"> </i>
                            </span>
                            15 mars, 2022
                         </div>
                      </div>
                   </a>
                   <a href="" class="flex group">
                      <div class="flex-shrink-0">
                         <img src="{{ asset('imaj/real.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                      </div>
                      <div class="flex-grow pl-3">
                         <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                            Le real hope du cap, l'equipe invaincu du tournoi
                         </h5>
                         <div class="flex text-gray-400 text-sm items-center">
                            <span class="mr-1 text-xs">
                                 <i class="far fa-clock"> </i>
                            </span>
                            11 mars, 2022
                         </div>
                      </div>
                   </a>
                   <a href="" class="flex group">
                      <div class="flex-shrink-0">
                         <img src="{{ asset('imaj/tempete.jpg') }}" alt="" class="w-20 h-14 rounded object-cover">
                      </div>
                      <div class="flex-grow pl-3">
                         <h5 class="text-md leading-5 font-roboto font-bold group-hover:text-blue-500 transition">
                            Le tempete de saint marc, la belle colonne a domine le don bosco deux buts a zero
                         </h5>
                         <div class="flex text-gray-400 text-sm items-center">
                            <span class="mr-1 text-xs">
                                 <i class="far fa-clock"> </i>
                            </span>
                            12 mars, 2022
                         </div>
                      </div>
                   </a>
                </div>
           </div>
    
            {{-- seksyon tags --}}
            <div class="bg-white shadow-sm rounded-sm p-4 mt-4">
             <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">
                   Tags
             </h3>
        </div>
          </div>
            
    
          </div>
    
       
       </div>
    
    </main>
    </body> 