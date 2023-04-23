

<?php $__env->startSection('main'); ?>
    <div style="color: red; text-align: center;background: linear-gradient(0deg, rgba(75,229,231,1) 0%, rgba(145,251,112,1) 30%, rgba(90,217,251,1) 100%) !important;">
        <?php echo $__env->make('Zoo.ClientView.sessionmessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
        <?php echo $__env->make('partials.zooCarousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container thumbs">
        <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="home-product-item" href="<?php echo e(route('clientView.show', ['id' => $a->id])); ?>">
                        <img src="<?php echo e(asset('image/'. $a->image)); ?>" alt="" class="img-circle">
                        <div class="caption">
                            <h3 class="text-center"><?php echo e($a->name); ?></h3>

                            
                            
                            
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- End Thumbnails -->
    <div class="container-full margin-0-bottom">
        <div class="wild-encounter">
            <div class="column cell wild-encounter__container__image">
                <div class=" -column wild-encounter__container__column__image__inner">
                    <img src="image/bao.jpg">
                </div>
            </div>
            <div class="column cell wild-encounter__container__text">
                <div class="wysiwyg container-medium pad-2-horizontal -column">
                    <h1 style="color: black">Meet the Animals</h1>
                    <h3>Wild Encounters</h3>
                    <p>Get up-close and personal with some of your favorite animals like penguins, cheetahs, porcupines, and sloths.</p>
                    <p><a
                            href="<?php echo e(route('clientView.model')); ?>"
                        ><span class="btn-fill-tiger" href="">Book Now</span></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full margin-0-bottom">
        <div class="wild-encounter">

            <div class="column cell wild-encounter__container__text">
                <div class="facility-schedule cell cell-medium-half -homepage align-center fill-cloud fill-paper pad-5-vertical">
                    <div class="facility-schedule__container ">
                        <div class="pad-1-horizontal">
                            <h1 style="color: #fff;padding-bottom: 38px; color: black">Timing at CentrallZoo</h1>
                            <table class="table table-bordered align-left type-smooth">
                                <thead class="facility-schedule__time pad-3-horizontal ">
                                <tr>
                                    <th><h2 style="color: #ff4d3b">Time</h2></th>
                                    <th><h2 style="color: #ff4d3b">Event</h2></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="no-border">
                                    <td class="facility-schedule__time pad-3-horizontal ">
                                        <h2>06:00 AM</h2>
                                    </td>
                                    <td class="facility-schedule__event ">
                                        <h2>Zoo Opens</h2>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="facility-schedule__time pad-3-horizontal ">
                                        <h2>10:00 AM</h2>
                                    </td>
                                    <td class="facility-schedule__event ">
                                        <h2>Cammping</h2>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="facility-schedule__time pad-3-horizontal ">
                                        <h2>15:30 PM</h2>
                                    </td>
                                    <td class="facility-schedule__event ">
                                        <h2>Penguin Feeding</h2>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="facility-schedule__time pad-3-horizontal ">
                                        <h2>16:30 PM</h2>
                                    </td>
                                    <td class="facility-schedule__event ">
                                        <h2>Animal Exhibits Close</h2>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="facility-schedule__time pad-3-horizontal ">
                                        <h2>20:00 PM</h2>
                                    </td>
                                    <td class="facility-schedule__event ">
                                        <h2>Zoo Closes</h2>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column cell wild-encounter__container__image">
                <div class=" -column wild-encounter__container__column__image__inner">
                    <img src="image/voi1.jpg" alt="event" style="
    height: 602px;
">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <br>
                <h1 class="pb-4 mb-4 font-italic">
                    Zoo map
                </h1>
                <img src="https://www.colchester-zoo.com/wp-content/uploads/2019/02/app-map-02-1024x632.png">
                <p class="text_introduct">
                    In <b> Central Zoo</b> is one of the biggest zoos in the town. The land area of the zoo is 33 acres. CENTRAL zoo was established in the year
                    1980 with 10-acre land but lately it was modified and land area was also added in the year 2000.
                    Proper residing space for all the type of animals has been made and maintains human security at high rate.
                    Proper supply of food for all the animals is maintained and checked at regular intervals.
                    <br>Zoos are places where wild animals are kept for public display.
                    Zoos are often the sites of sophisticated breeding centers, where endangered species may be protected and studied.
                    Some zoos, like this aquarium in Monterey, California, are dedicated to one species or set of species
                </p>
                <p class="text_introduct">
                    <i>This is an ideal place to help you and your family discharge the street, relax after many hours of work. An option suitable for everyone.</i>
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.clientMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Last-Zoo\resources\views/Zoo/ClientView/index.blade.php ENDPATH**/ ?>