<?php
namespace App;

/**
 * Manage enrolments of users in courses.
 */
class enrolment_manager {
    /** @var array List of user objects. */
    private array $users = [];

    /** @var array List of course objects. */
    private array $courses = [];

    /** @var array List of enrolments. */
    private array $enrolments = [];

    /**
     * Populate valid users and courses in the object's memory to use for enrolments.
     *
     * @param array $users Array of user objects.
     * @param array $courses Array of course objects.
     */
    public function __construct(array $users, array $courses) {
        // We populate this class with user and course data instead of relying on a database to simplify the application.
        $this->users = $users;
        $this->courses = $courses;
    }

    /**
     * Enrol a user in a course.
     *
     * @param int $userid ID of user object.
     * @param int $courseid ID of course object.
     * @return void
     */
    public function enrol_user(int $userid, int $courseid): void {
        // Implement this.
    }

    /**
     * Unenrol a user from a course.
     *
     * @param int $userid ID of user object.
     * @param int $courseid ID of user object.
     * @return void
     */
    public function unenrol_user(int $userid, int $courseid): void {
        // Implement this.
    }

    /**
     * Get all courses a user is enrolled in.
     *
     * @param int $userid ID of user object.
     * @return array
     */
    public function get_user_courses(int $userid): array {
        // Implement this.
        return [];
    }
}
