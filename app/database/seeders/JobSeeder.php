<?php

namespace Database\Seeders;

use App\Models\ClientJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     protected $clientJobs = [

        [ 'title' => 'Management Accountant', 'industries_id' => '1', 'location' => 'Lagos', 'deadline' => '2/15/2023', 'salary_range' => '5000000', 'job_details' => 'ob Description/Requirements
        Responsibilities:
        
        Interpret financial statements
        Liaising with other financial institutions
        Required to reconcile bank accounts 
        Ensure alignment in the finance operations and reports. 
        Ensure alignment with the activities of other functional departments of the bank.
        Improve the overall integrity of financial systems and control the environment.
        Coordinate month-end account closing activities.
        Prepare complete and accurate financial reports and other Key Performance Indicators (KPIs).
        Prepare the annual audited Financial statement.
        Preparation of Inter-Company Accounts and Reports.
        Prepare accurate and complete monthly standard journals and schedules.
        Contribute to the overall financial management of information systems (not just reporting requirements) including the planning, budgeting, project approval, and execution of the new systems.
        
        
        
        
        Requirements:
        
        ACCA certification is preferred 
        Candidates must be between the ages of 30 - 40 years
        Proficient in the use of  Ms. Excel
        Competent in general financial analysis
        Good understanding of budgeting and forecasting
        Must be willing to travel frequently', 'company' => 'The Candlelight Foundation', 'job_type' => 'remote', 'logo'=> 'logo.png'],

        [ 'title' => 'Finanacial Advisor', 'industries_id' => '2', 'location' => 'Abuja', 'deadline' => '14/2/2023', 'salary_range' => '2500000', 'job_details' => 'Responsibilities:

        Talking to clients to determine their expenses, income, insurance coverage, financial objectives, tax status, risk tolerance, or other information needed to develop a financial plan.
        Answering client questions about financial plans and strategies and giving financial advice.
        Advising strategies for clients in insurance coverage, investment planning, cash management, and other areas to help them reach financial objectives.
        Reviewing client accounts and plans on a regular basis to understand if life or economic changes, situational concerns, or financial performance necessitate changes in their plan.
        Analyzing financial data received from clients to develop strategies for meeting clients financial goals.
        Preparing or interpreting financial document summaries, investment performance reports, and income projections for clients.
        Implementing financial plans or referring clients to professionals who can help them.
        Managing and updating client portfolios.
        Contacting clients regularly to discover changes in their financial status. Building and maintaining your client base. 
        
        
        Requirements:
        
        Minimum academic qualification of OND/ HND in business, finance, or related fields.
        0 - 1 year of sales experience ( trainee job).
        Knowledge of mutual funds, securities, and insurance industries.
        Proficient in Word, Excel, Outlook, and PowerPoint.
        Comfortable using a computer for various tasks.
        Experience providing quality financial advice.
        
        
        Remuneration:  Based on Commission
        
        Other benefits include a mobilization fee plus incentives.', 'company' => 'Tangerine Africa', 'job_type' => 'Full Time', 'logo' => 'logo.png'],

        [ 'title' => 'Accounts Officer', 'industries_id' => '3', 'location' => 'Lagos', 'deadline' => '15/2/2023', 'salary_range' => '6000000', 'job_details' => 'esponsibilities:

        Provide a coordinating role in the development of a three-year Corporate Strategy and Roadmap for the key programmatic areas including the monitoring and execution of the implementation plan
        Support Directors with research, problem-solving, and the accurate and timely reporting of the Nigeria Financial Inclusion Programme activities according to applicable timeframes and formats
        Manage program reporting process(es) including collation of various project status updates from project staff and technical assistance partners, and the provision of overall program status reporting
        Act as an integral member of the team responsible for the centralized process for coordination of resources, planning, communication, documentation, travel, and logistics, and maintain a calendar of deadlines and deliverables for Nigerias financial inclusion program 
        Support external stakeholder management activities, the cadence of engagements, workshops, and meetings, and delivery of individual projects
        Execute set priorities, effect change, manage expectations through influence and in partnership with Directors, suggesting tactics and strategies to address any challenges, issues, and opportunities
        Develop project management tools and trackers as needed to ensure a systematic and clear overview of project activities, budget, and results framework is available to ensure effective project management.
        Provide support to review and manage the execution of all contracts, memoranda of understanding, and agreements for the Nigeria financial inclusion program 
        Identify and monitor all contractual obligations of all parties/stakeholders of the Nigeria financial inclusion program 
        Documentation of technical assistance requirements, review and analysis of Requests for Information (RFIs), and Request for Proposals (RFPs) on the program
        Monitor and process approved relevant program expenses and invoices
        Ensure financial inclusion program staff and technical assistance partners adhere to RPA policies and procedures
        Work with Directors to manage relationships with key stakeholders including relevant Ministries, Departments, Agencies (MDAs), technical assistance partners, consultants, external partners, and the program funder(s)
        Manage operational responsibilities, including processing payment requests and creating consultant/vendor agreements for financial inclusion Projects (that may not have employees or staff)
        Participate and capture meeting minutes with the various financial inclusion projects involving technical assistance partners, consultants, and project partners – and update the CRM with the required information for knowledge management.
        
        
        Requirements:
        
        Minimum academic qualification of B.A./B.Sc. Degree or equivalent work experience required;
        A Masters degree is preferred;
        3 - 5 years of related experience in the non-profit sector and/ or consulting disciplines
        Familiarity and demonstrated interest in financial inclusion concepts and theories
        Knowledge or experience working with Nigerian Federal Government offices and the digital financial services landscape in Nigeria 
        Proven ability to multi-task and balance the workload and deadlines for multiple projects
        Strong organizational and project management skills and a demonstrated attention to detail
        Clear and prompt communication skills, both oral and written
        Experience supporting non-profit operations
        Familiarity with non-profit budgets and income statements is preferred but not required
        Familiarity with fiscal sponsorship and knowledge of a foreign language (French, Spanish, etc.) and other languages (Hausa, Yoruba, etc.) is preferred but not required
        Computer proficiency, particularly working knowledge of Office Suite; familiarity with NetSuite/CRM (Helpful)
        Must be willing to travel for client work as needed.
        
        
        Remuneration: Rockefeller Philanthropy Advisors offers a competitive compensation and benefits package including health coverage, retirement benefits, paid sick leave, vacation and holidays, tuition reimbursement, and access to professional development resources', 'company' => 'Lohachy Farms, Epe', 'job_type' => 'Full Time', 'logo' => 'logo.png'],
        
        [ 'title' => 'HR Officer', 'industries_id' => '4', 'location' => 'Lagos', 'deadline' => '2/2/2024', 'salary_range' => '350000', 'job_details' => 'Responsibilities:

        Develop and implement HR strategies and initiatives aligned with the overall company business strategy
        Nurture a positive and indiscriminate work environment for all
        Manage the recruitment and selection process
        Create and implement effective onboarding plans
        Assess training needs to apply and monitor training programs
        Maintain pay plan and benefits program
        Bridge management and employee relations by addressing demands, grievances, or other issues
        Support current and future business needs through the development, engagement, motivation, and preservation of human capital
        Oversee and manage a performance appraisal system that drives high performance
        Report to management and provide decision support through HR metrics
        Ensure legal compliance throughout human resource management.
        
        
        Requirements:
        
        Minimum academic qualification of HND or BSC in Human Resources or Organizational Psychology in a related field 
        At least 2 years of previous experience in a related business 
        Meticulous attention to detail.
        People oriented and results-driven
        Demonstrable experience with Human Resources metrics
        Understanding of HR functions and Labor laws
        Knowledge of HR systems and databases
        Negotiation and people management skills.', 'company' => 'Lohachy Farms, Epe', 'job_type' => 'Full time', 'logo' => 'logo.png'],





     ];





    public function run()
    {
        foreach($this->clientJobs as $jobs ){
            ClientJob::create($jobs);
        }
    }
}
