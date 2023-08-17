<?php
namespace Perspective\Thema15exercise2\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('None'), 'value' => 'none'],
                ['label' => __('Balloon'), 'value' => 'balloon'],
                ['label' => __('charter plane'), 'value' => 'charter_plane'],
                ['label' => __('high-speed plane'), 'value' => 'high-speed-plane'],
                ['label' => __('spaceship'), 'value' => 'spaceship'],
            ];
        }
        return $this->_options;
    }
}
