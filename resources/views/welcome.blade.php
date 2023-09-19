<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Payment System Manager</title>

    <style>
        .radio-input label {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 12px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease-in-out;
        }

        .radio-input label:before {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #ccc;
            transition: all 0.3s ease-in-out;
        }

        .radio-input input[type="radio"]:checked+label:before {
            background-color: green;
            top: 0;
        }

        .radio-input input[type="radio"]:checked+label {
            background-color: royalblue;
            color: #fff;
            animation: radio-translate 0.5s ease-in-out;
        }

        @keyframes radio-translate {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateX(0);
            }
        }


        .Btn {
            width: 130px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(15, 15, 15);
            border: none;
            color: white;
            font-weight: 600;
            gap: 8px;
            cursor: pointer;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.103);
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
        }

        .svgIcon {
            width: 16px;
        }

        .svgIcon path {
            fill: white;
        }

        .Btn::before {
            width: 130px;
            height: 130px;
            position: absolute;
            content: "";
            background-color: white;
            border-radius: 50%;
            left: -100%;
            top: 0;
            transition-duration: .3s;
            mix-blend-mode: difference;
        }

        .Btn:hover::before {
            transition-duration: .3s;
            transform: translate(100%, -50%);
            border-radius: 0;
        }

        .Btn:active {
            transform: translate(5px, 5px);
            transition-duration: .3s;
        }
    </style>
</head>

<body class="antialiased m-6 tracking-widest">

    <h1 class="text-3xl font-bold font-serif underline text-center">
        Payment System Manager
    </h1>

    <div class="container mx-auto">
        <div class="row m-4 p-4 justify-center border rounded-md">
            <div class="col-8 col-sm-10">
                <div class="text-center text-xl font-serif font-bold italic tracking-wider">Commandes</div> <br>
                <hr>
                <div class="container mt-6">
                    <div class="grid grid-cols-2 gap-6 radio-input">
                        <div class="hover:shadow-md group rounded-md p-3 ring-1 ring-slate-200 shadow-sm height-20">
                            <input type="radio" class="hidden" value="value-1" name="value-1" id="value-1">
                            <label for="value-1">Value 1</label>
                        </div>
                        <div class="hover:shadow-md group rounded-md p-3 ring-1 ring-slate-200 shadow-sm">
                            <input type="radio" class="hidden" value="value-2" name="value-2" id="value-2">
                            <label for="value-2">Value 2</label>
                        </div>
                        <div class="hover:shadow-md group rounded-md p-3 ring-1 ring-slate-200 shadow-sm">
                            <input type="radio" class="hidden" value="value-3" name="value-3" id="value-3">
                            <label for="value-3">Value 3</label>
                        </div>
                        <div class="hover:shadow-md group rounded-md p-3 ring-1 ring-slate-200 shadow-sm">
                            <input type="radio" class="hidden" value="value-4" name="value-4" id="value-4">
                            <label for="value-4">Value 4</label>
                        </div>
                    </div>
                </div> <br>
                <hr>
                <div class="container mt-6">
                    <div class="grid grid-cols-3 gap-6 justify-center">
                        <div class="flex items-center justify-center">
                            <button class="Btn">
                                Pay
                                <svg class="svgIcon" viewBox="0 0 576 512">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24h112c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="Btn">
                                Pay
                                <svg class="svgIcon" viewBox="0 0 576 512">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24h112c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="Btn">
                                Pay
                                <svg class="svgIcon" viewBox="0 0 576 512">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24h112c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
