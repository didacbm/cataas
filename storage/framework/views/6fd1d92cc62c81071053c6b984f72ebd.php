

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Cat Gallery</h1>

        <div class="row mt-4">
            <?php $__currentLoopData = $catImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cataas.com/cat/<?php echo e($catImage->_id); ?>" 
                             alt="Cat Image" 
                             width="100%" 
                             height="200px" 
                             style="object-fit: cover; border-radius: 10px;">
                        <div class="card-body">
                            <?php
                                $extension = explode('/', $catImage->mimetype)[1];
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Paginació -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <!-- Enrere -->
                    <?php if($catImages->onFirstPage()): ?>
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($catImages->previousPageUrl()); ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- Números de pàgina -->
                    <?php $__currentLoopData = $catImages->getUrlRange(1, $catImages->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="page-item <?php echo e($page == $catImages->currentPage() ? 'active' : ''); ?>">
                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Endavant -->
                    <?php if($catImages->hasMorePages()): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($catImages->nextPageUrl()); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\didac\OneDrive\Desktop\cf2\M7\cataas\cataas\resources\views/cat_images/index.blade.php ENDPATH**/ ?>