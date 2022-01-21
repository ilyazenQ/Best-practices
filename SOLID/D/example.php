<?php
 // Напрямую зависит от Dependency();
class worst {

   public function getSome() {
      $dependency = new Dependency();
      $get = $depend->get();
   }

}
// Напрямую зависит от Dependency() и его экземпляров;
class better {
   private $dependency;
   public function __construct(Dependency $dependency)
   {
      $this->dependency = $dependency;
   }
   public function getSome() {
   $get = $this->dependency->get();
   }
}

// Не зависит от конкертного класса, а от абстракции ($dependencyProvider обьект класса реализующий интерфейс IDependencyProvider)
class theBest {
   private $dependencyProvider;
   public function __construct(IDependencyProvider $dependencyProvider)
   {
      $this->dependencyProvider = $dependencyProvider;
   }
   public function getSome() {
   $get = $this->dependencyProvider->get();
   }
}
