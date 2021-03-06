<x-app-layout>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('My Balance') }}
       </h2>
       <p class="mybalance"> $ {{ Auth::user()->balance }}</p>
    </x-slot>
    <div>
       <div class="py-12">
          <div class="w-2/3 mx-auto">
             <h3>Users</h3>
             <div class="bg-white rounded my-6">
                <table class="text-left w-full border-collapse userlist">
                   <tr>
                      <th>Name</th>
                      <th>Balance</th>
                   </tr>
                   @foreach ($users as $user)
                   <tr class="modal-open hover:bg-gray-200" data-receiverid="{{$user->id }}" data-senderid="{{Auth::user()->id }}"  data-receiverfname="{{$user->fname }}" data-receivermaxamount="{{Auth::user()->balance }}" onclick="activateModal(this);"  >
                      <td>{{ $user->fname }} {{ $user->lname }}</td>
                      <td>$ {{ $user->balance }}</td>
                       
                   </tr>
                   @endforeach
                </table>
             </div>
          </div>
       </div>
       <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
          <div class="modal-overlay absolute w-full h-full modal-color opacity-90"></div>
          <div class="modal-container bg-gray w-11/12 md:max-w-sm mx-auto  shadow-lg  z-50 overflow-y-auto">
             <div class="bg-white p-7 ">
                
                <div class="modal-logo my-7">
                   <x-dollar-logo class="w-20 h-20 fill-current text-gray-500" />
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('dashboard') }}">
                   @csrf
                   <input type="hidden" id="receiverid" name="receiverid" value="">
                   <input type="hidden" id="senderid" name="senderid" value="">
                   <input type="hidden" id="receivermaxamount" name="receivermaxamount" value="">

                   <h3 class="font-bold modal-sender text-center">Send Money to <span id="receiverfname"></span></h3>
                   <!-- Amount -->
                   <div class="relative">
                      <x-label for="amount"  :value="__('Amount')" />
                      <div class="absolute inset-y-0 left-0 pl-3 pt-6 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-md">
                        $
                        </span>
                     </div>
                      <x-input id="amount" class="block mt-1 w-full" step="1" min="0" max="" type="number" name="amount" :value="old('amount')" required autofocus />
                   </div>
                   <div class="  items-center  mt-4">
                      <button class="modal-close mr-4  items-center px-12 py-3 bg-transparent border border-gray-500  font-semibold text-md text-gray  tracking-widest hover:bg-gray-500">Close</button>

                      <button type="submit" class="items-center px-12 py-3 bg-blue-400 border border-transparent  font-semibold text-md text-white  tracking-widest hover:bg-green-500 active:bg-green-500 focus:outline-none focus:border-green-500 focus:ring ring-green-500 disabled:opacity-25 transition ease-in-out duration-150">
                      Send
                      </button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
    <script>

        function activateModal(obj) {
            const receiverId = obj.dataset.receiverid,
            senderId = obj.dataset.senderid,
            receiverFname = obj.dataset.receiverfname,
            receiverMaxAmount = obj.dataset.receivermaxamount;

            console.log(receiverId, senderId,receiverFname, receiverMaxAmount );

            document.getElementById("receiverid").value = receiverId;
            document.getElementById("senderid").value = senderId;
            document.getElementById("receivermaxamount").value = receiverMaxAmount;
            document.getElementById("amount").max = receiverMaxAmount;
            document.getElementById("receiverfname").innerHTML = receiverFname;
        }
    </script>
 </x-app-layout>