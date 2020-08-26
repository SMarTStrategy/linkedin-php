<?php

namespace SMarT\LinkedIn\DataModel;

class BasicProfile extends Model
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $localizedFirstName;

    /**
     * @var string
     */
    private $localizedLastName;

    /**
     * @var array
     */
    private $profilePicture;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BasicProfile
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedFirstName()
    {
        return $this->localizedFirstName;
    }

    /**
     * @param string $localizedFirstName
     * @return BasicProfile
     */
    public function setLocalizedFirstName($localizedFirstName)
    {
        $this->localizedFirstName = $localizedFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedLastName()
    {
        return $this->localizedLastName;
    }

    /**
     * @param string $localizedLastName
     * @return BasicProfile
     */
    public function setLocalizedLastName($localizedLastName)
    {
        $this->localizedLastName = $localizedLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param string $profilePicture
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }

    public function getProfilerCdnUrl100x100()
    {
        return $this->profilePicture['displayImage~']['elements'][0]['identifiers'][0]['identifier'];
    }

    public function getProfilerCdnUrl200x200()
    {
        return $this->profilePicture['displayImage~']['elements'][1]['identifiers'][0]['identifier'];
    }

    public function getProfilerCdnUrl400x400()
    {
        return $this->profilePicture['displayImage~']['elements'][2]['identifiers'][0]['identifier'];
    }

    public function getProfilerCdnUrl800x800()
    {
        return $this->profilePicture['displayImage~']['elements'][3]['identifiers'][0]['identifier'];
    }
}
