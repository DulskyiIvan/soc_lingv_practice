<?php

namespace App\Entity;

use App\Repository\QuestionaryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionaryRepository::class)
 */
class Questionary
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $liveLocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sex;

    /**
     * @ORM\Column(type="date")
     */
    private $birthYear;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $education;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialityState;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nativeLanguage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whereAreYouLongTermLived;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fatherLanguage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matherLanguage;

    /**
     * @ORM\Column(type="integer")
     */
    private $ageStartStudyRussian;

    /**
     * @ORM\Column(type="integer")
     */
    private $ageStartStudyUkrainian;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languageBeforeSchool;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languageInSchool;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ukrainianLanguageLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $russianLanguageLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $needStudyRussianInSchool;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $priorityLanguageInFamily;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $priorityLanguageWithFriends;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tokenOfChooseInformation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languageWithUnknown;

    /**
     * @ORM\ManyToOne(targetEntity=Practicant::class, inversedBy="questionaries")
     * @ORM\JoinColumn(nullable=false)
     */
    private $practicant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLiveLocation(): ?string
    {
        return $this->liveLocation;
    }

    public function setLiveLocation(string $liveLocation): self
    {
        $this->liveLocation = $liveLocation;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getBirthYear(): ?\DateTimeInterface
    {
        return $this->birthYear;
    }

    public function setBirthYear(\DateTimeInterface $birthYear): self
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(string $education): self
    {
        $this->education = $education;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getSocialityState(): ?string
    {
        return $this->socialityState;
    }

    public function setSocialityState(string $socialityState): self
    {
        $this->socialityState = $socialityState;

        return $this;
    }

    public function getNativeLanguage(): ?string
    {
        return $this->nativeLanguage;
    }

    public function setNativeLanguage(string $nativeLanguage): self
    {
        $this->nativeLanguage = $nativeLanguage;

        return $this;
    }

    public function getWhereAreYouLongTermLived(): ?string
    {
        return $this->whereAreYouLongTermLived;
    }

    public function setWhereAreYouLongTermLived(string $whereAreYouLongTermLived): self
    {
        $this->whereAreYouLongTermLived = $whereAreYouLongTermLived;

        return $this;
    }

    public function getFatherLanguage(): ?string
    {
        return $this->fatherLanguage;
    }

    public function setFatherLanguage(string $fatherLanguage): self
    {
        $this->fatherLanguage = $fatherLanguage;

        return $this;
    }

    public function getMatherLanguage(): ?string
    {
        return $this->matherLanguage;
    }

    public function setMatherLanguage(string $matherLanguage): self
    {
        $this->matherLanguage = $matherLanguage;

        return $this;
    }

    public function getAgeStartStudyRussian(): ?int
    {
        return $this->ageStartStudyRussian;
    }

    public function setAgeStartStudyRussian(int $ageStartStudyRussian): self
    {
        $this->ageStartStudyRussian = $ageStartStudyRussian;

        return $this;
    }

    public function getAgeStartStudyUkrainian(): ?int
    {
        return $this->ageStartStudyUkrainian;
    }

    public function setAgeStartStudyUkrainian(int $ageStartStudyUkrainian): self
    {
        $this->ageStartStudyUkrainian = $ageStartStudyUkrainian;

        return $this;
    }

    public function getLanguageBeforeSchool(): ?string
    {
        return $this->languageBeforeSchool;
    }

    public function setLanguageBeforeSchool(string $languageBeforeSchool): self
    {
        $this->languageBeforeSchool = $languageBeforeSchool;

        return $this;
    }

    public function getLanguageInSchool(): ?string
    {
        return $this->languageInSchool;
    }

    public function setLanguageInSchool(string $languageInSchool): self
    {
        $this->languageInSchool = $languageInSchool;

        return $this;
    }

    public function getUkrainianLanguageLevel(): ?string
    {
        return $this->ukrainianLanguageLevel;
    }

    public function setUkrainianLanguageLevel(string $ukrainianLanguageLevel): self
    {
        $this->ukrainianLanguageLevel = $ukrainianLanguageLevel;

        return $this;
    }

    public function getRussianLanguageLevel(): ?string
    {
        return $this->russianLanguageLevel;
    }

    public function setRussianLanguageLevel(string $russianLanguageLevel): self
    {
        $this->russianLanguageLevel = $russianLanguageLevel;

        return $this;
    }

    public function getNeedStudyRussianInSchool(): ?string
    {
        return $this->needStudyRussianInSchool;
    }

    public function setNeedStudyRussianInSchool(string $needStudyRussianInSchool): self
    {
        $this->needStudyRussianInSchool = $needStudyRussianInSchool;

        return $this;
    }

    public function getPriorityLanguageInFamily(): ?string
    {
        return $this->priorityLanguageInFamily;
    }

    public function setPriorityLanguageInFamily(string $priorityLanguageInFamily): self
    {
        $this->priorityLanguageInFamily = $priorityLanguageInFamily;

        return $this;
    }

    public function getPriorityLanguageWithFriends(): ?string
    {
        return $this->priorityLanguageWithFriends;
    }

    public function setPriorityLanguageWithFriends(string $priorityLanguageWithFriends): self
    {
        $this->priorityLanguageWithFriends = $priorityLanguageWithFriends;

        return $this;
    }

    public function getTokenOfChooseInformation(): ?string
    {
        return $this->tokenOfChooseInformation;
    }

    public function setTokenOfChooseInformation(string $tokenOfChooseInformation): self
    {
        $this->tokenOfChooseInformation = $tokenOfChooseInformation;

        return $this;
    }

    public function getLanguageWithUnknown(): ?string
    {
        return $this->languageWithUnknown;
    }

    public function setLanguageWithUnknown(string $languageWithUnknown): self
    {
        $this->languageWithUnknown = $languageWithUnknown;

        return $this;
    }

    public function getPracticant(): ?Practicant
    {
        return $this->practicant;
    }

    public function setPracticant(?Practicant $practicant): self
    {
        $this->practicant = $practicant;

        return $this;
    }
}
