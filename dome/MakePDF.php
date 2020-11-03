<?php


namespace MakePDF;


use Psr\Log\LoggerInterface;

class MakePDF
{
    /**
     * @param \Psr\Log\LoggerInterface
     *
     * @return \Mpdf\Mpdf
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        foreach ($this->services as $name) {
            if ($this->$name && $this->$name instanceof \Psr\Log\LoggerAwareInterface) {
                $this->$name->setLogger($logger);
            }
        }

        return $this;
    }
}