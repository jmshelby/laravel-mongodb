<?php namespace Jenssegers\Mongodb\Query\Aggregation;

use Jenssegers\Mongodb\Query\Builder;

interface AggregatorInterface
{

	/*
	 * The priority of this aggregator operation, any value between
	 * 100 and -100. 100 being called soonest and -100 being called
	 * latest.
	 *
	 * @return $this
	 */
	public function getPriority();

	/*
	 * Apply this operator to the specified pipeline
	 *
	 * @return $this
	 */
	public function applyOperator(Builder $builder, &$pipline);

}
