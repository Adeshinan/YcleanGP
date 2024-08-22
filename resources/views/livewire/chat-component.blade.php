<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                    <div class="chat-leftsidebar">
                        <div class="px-4 pt-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="mb-4">Chats</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Add Contact">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                            <i class="ri-add-line align-bottom"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="search-box">
                                <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                <i class="ri-search-2-line search-icon"></i>
                            </div>
                        </div> <!-- .p-4 -->

                        <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab">
                                    Chats
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab">
                                    Contacts
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content text-muted">
                            <div class="tab-pane active" id="chats" role="tabpanel">
                                <div class="chat-room-list pt-3" data-simplebar>
                                    <div class="d-flex align-items-center px-4 mb-2">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="New Message">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                                    <i class="ri-add-line align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-message-list">
                                        {{-- <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                            @foreach ($lastMessages as $message)
                                                <li class="chat-user" data-user-id="{{ $message->sender_id }}">
                                                    <div class="d-flex align-items-center">
                                                        <div class="user-info">
                                                            <h5 class="user-name">{{ $message->sender->name }}</h5>
                                                            <p class="user-message">{{ $message->message }}</p>
                                                            <small class="text-muted">{{ \App\Helpers\TimeHelper::formatTime($message->created_at) }}</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul> --}}
                                    </div>
                                    
                                    <!-- End chat-message-list -->
                                </div>
                            </div>
                            <div class="tab-pane" id="contacts" role="tabpanel">
                                <div class="chat-room-list pt-3" data-simplebar>
                                    <div class="sort-contact">
                                       {{--  @foreach ($clients as $client)
                                        <p><a href="{{route('messages.chat',$client->id)}} ">{{$client->name}} </a> </p>
                                        @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab contact -->
                    </div>
                    <!-- end chat leftsidebar -->
                    
                    <!-- Start User chat -->
                    <div class="user-chat w-100 overflow-hidden">
                        <div class="chat-content d-lg-flex">
                            <!-- start chat conversation section -->
                            <div class="w-100 overflow-hidden position-relative">
                                <!-- conversation user -->
                                <div class="position-relative">





                                    <div class="position-relative" id="users-chat">
                                        <div class="p-3 user-chat-topbar">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                            <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                    <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                                    <span class="user-status"></span>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">{{$user->name}}</a></h5>
                                                                    <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>Online</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-4">
                                                    <ul class="list-inline user-chat-nav text-end mb-0">
                                                        <li class="list-inline-item m-0">
                                                            <div class="dropdown">
                                                                <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="search" class="icon-sm"></i>
                                                                </button>
                                                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                    <div class="p-2">
                                                                        <div class="search-box">
                                                                            <input type="text" class="form-control bg-light border-light" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                            <i class="ri-search-2-line search-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
    
                                                        <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                            <button type="button" class="btn btn-ghost-secondary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                                                <i data-feather="info" class="icon-sm"></i>
                                                            </button>
                                                        </li>
    
                                                        <li class="list-inline-item m-0">
                                                            <div class="dropdown">
                                                                <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="more-vertical" class="icon-sm"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-block d-lg-none user-profile-show" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
    
                                        </div>



                                        <!-- end chat user head -->
                                        <div class="chat-conversation p-3 p-lg-4" id="" data-simplebar>
                                            @inject('timeHelper', 'App\Helpers\TimeHelper')
    
                                            <ul class="list-unstyled chat-list" id="">
                                                @foreach ($messages as $message)
                                                <li class="chat-list {{ $message['sender'] != auth()->user()->name ? 'left' : 'right flex' }}">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"> {{$message['message']}} </p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item delete-item" href="#">
                                                                            <i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name">
                                                                <small class="text-muted time">{{ $timeHelper::formatTime($message['created_at']) }}</small>
                                                                <span class="check-message-icon {{ $message['vue'] == 1 ? 'text-info' : 'text-dark' }}">
                                                                    @if ($message['vue'] == 1)
                                                                    <i class=" bx bx-check-double " style="font-size: 20px"></i>
                                                                    @else
                                                                    <i class="bx bx-check"style="font-size: 20px" ></i>
    
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            
                                        </div>
                                        <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show" id="copyClipBoard" role="alert">
                                            Message copied
                                        </div>
                                    </div>











                                    

                                <!-- end chat-conversation -->
                                <div class="chat-input-section p-3 p-lg-4">
                                    <form wire:submit.prevent='sendMessage()' id="chatinput-form" enctype="multipart/form-data">
                                        <div class="row g-0 align-items-center">
                                            <div class="col">
                                                <div class="chat-input-feedback">Please Enter a Message</div>
                                                <input type="text" wire:model='message' class="form-control chat-input bg-light border-light" placeholder="Type your message...">
                                            </div>
                                            <div class="col-auto">
                                                <div class="chat-input-links ms-2">
                                                    <div class="links-list-item">
                                                        <button type="submit" class="btn btn-success chat-send waves-effect waves-light">
                                                            <i class="ri-send-plane-2-fill align-bottom"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end chat-input-section -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat-wrapper -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const userId = @json(auth()->id()); // Récupérer l'ID de l'utilisateur connecté
    
            Echo.private(chat-channel.${userId})
                .listen('ChatMessageEvent', (event) => {
                    // Transférer l'événement à Livewire
                    Livewire.emit('messageReceived', event.message);
                });
        });
    </script>
</div>



