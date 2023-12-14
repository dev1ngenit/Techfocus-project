<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolutionDetail extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';

    /**
     * Get the Row One that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rowOne()
    {
        return $this->belongsTo(Row::class, 'row_one_id');
    }

    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rowFour()
    {
        return $this->belongsTo(Row::class, 'row_four_id');
    }

    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardOne()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_one_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardTwo()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_two_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardThree()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_three_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardFour()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_four_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardFive()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_five_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardSix()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_six_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardSeven()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_seven_id');
    }
    /**
     * Get the Row Four that owns the SolutionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solutionCardEight()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_card_eight_id');
    }
}
