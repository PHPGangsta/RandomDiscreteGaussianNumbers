<?

class RandomDiscreteGaussianNumbers
{
    protected $_iterations = 5;

    public function getNumber($min, $max)
    {
        $sum = 0;
        for ($i = 0; $i < $this->_iterations; $i++) {
            $sum += rand($min, $max);
        }

        return round($sum/$this->_iterations);
    }
}

$class = new RandomDiscreteGaussianNumbers();
for ($i=0; $i<10; $i++) {
    echo $class->getNumber(0, 7)."\n";
}